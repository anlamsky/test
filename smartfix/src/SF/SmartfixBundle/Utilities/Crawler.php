<?php

namespace SM\AdminBundle\Utilities;

use Symfony\Component\HttpFoundation\Response;
use SM\AdminBundle\SMAdminBundle;
use Sunra\PhpSimple\HtmlDomParser;
use SM\AdminBundle\Entity\Article;
use SM\AdminBundle\Utilities\Utilities;

/**
 * Crawler
 */
class Crawler
{

    private $entityManger;
    private $dom;
    private $pageNews;
    private $rowClass = array('items-leading', 'row-0', 'row-1', 'row-2', 'row-3');
    private $domain;
    private $uri;
    private $team;
    private $coach;
    private $subfixUrl = '?tmpl=component&print=1&layout=default&page=';

    /**
     * __construct
     *
     * @param type $entityManger
     * @param type $url
     */
    public function __construct($entityManger, $domain, $uri)
    {
        $this->entityManger = $entityManger;
        $this->domain = $domain;
        $this->uri = $uri;
    }

    /**
     * Parse link for new paging link
     *
     * @param type $url
     *
     * @return \SM\AdminBundle\Utilities\Crawler
     */
    public function parseLink($url)
    {
        $dom = HtmlDomParser::file_get_html($url);
        $this->dom = $dom;
        $this->parsePageNews();

        return $this;
    }

    /**
     * Parse page news, contain news list and pagination only
     *
     * @return \SM\AdminBundle\Utilities\Crawler
     */
    public function parsePageNews()
    {
        $this->pageNews = $this->dom->find('div[class=PageActualites]', 0);

        return $this;
    }

    /**
     * Return page news
     *
     * @return type
     */
    public function getPageNewsHtml()
    {
        return $this->pageNews->outertext;
    }

    /**
     * Parse news list
     *
     * @return integer
     */
    public function parseNews($getReturn = false, $storeDB = true)
    {
        $newsList = array();
        foreach ($this->rowClass as $class) {
            $row = $this->pageNews->find("div[class={$class}]", 0);
            if ($row) {
                $news = $this->parseNewsStructure($row);
                $newsList[] = $news;
            }
        }
        if ($storeDB) {
            $this->storeNewsArrToDB($newsList);
        }

        return (!$getReturn) ? count($newsList) : $newsList;
    }

    /**
     * Parse new structure and return array
     *
     * @param type $newsData
     *
     * @return array
     */
    public function parseNewsStructure($newsData)
    {
        $data = array();
        $eleTitle = $newsData->find('h2', 0)->find('a', 0);
        $link = $eleTitle->href;
        preg_match('/\/(\d+)-/', $link, $match);
        $newsId = (isset($match[1]))?$match[1]:'';

        $data['newsId'] = $newsId;
        $data['title'] = trim($eleTitle->text());
        if ($des = $newsData->find('p', 0)) {
            $data['description'] = trim($newsData->find('p', 0)->innertext());
        } else {
            $data['description'] = '';
        }
        
        $suffix = Utilities::getParameter('web_view_suffix_link');

        $data['detailLink'] = $this->domain . $link . $suffix;
        $data['image'] = Utilities::getParameter('default_image');

        return $data;
    }

    /**
     * Store 5 rows news to database
     *
     * @param type $newsArr
     */
    public function storeNewsArrToDB($newsArr)
    {
        $articleRepo = $this->entityManger->getRepository('SMAdminBundle:Article');
        foreach ($newsArr as $news) {
            $existArticle = $articleRepo->find($news['newsId']);
            if ($existArticle) {
                $existArticle->setTitle($news['title']);
                $existArticle->setDescription($news['description']);
                $existArticle->setDetailLink($news['detailLink']);
                $this->entityManger->persist($existArticle);
            } else {
                $article = new Article();
                $article->setTitle($news['title']);
                $article->setDescription($news['description']);
                $article->setDetailLink($news['detailLink']);
                $this->entityManger->persist($article);
                $article->setNewsId($news['newsId']);
            }
        }
        $this->entityManger->flush();
    }

    /**
     * Parse paging info
     *
     * @return type
     */
    public function parsePagingInfo()
    {
        $pagination = $this->pageNews->find('div[class=pagination]', 0);
        //print $pageLinks->outertext;
        $pageLinks = $pagination->find('a[class=pagenav]');
        $pageArr = array();
        foreach ($pageLinks as $page) {
            if (is_numeric($page->text())) {
                $pageArr[$page->text()] = $page->href;
            }
        }

        return $pageArr;
    }

    /**
     * Fetch all news
     */
    public function fetchAll()
    {
        $pos = 0;
        do {
            $url = $this->domain . $this->uri . $pos;
            $num = $this->parseLink($url)->parseNews();
            $pos += 5;
        } while ($num === 5);
    }

    /**
     * Parse Team
     *
     * @param type $team
     *
     * @return type
     */
    public function parseTeam($team)
    {
        $parseTeam['imgUrl'] = ($team->find('img', 0)) ? $this->domain . $team->find('img', 0)->src : '';
        $parseTeam['detailUrl'] = ($team->find('a', 0)) ? $this->domain . $team->find('a', 0)->href . $this->subfixUrl : '';
        $parseTeam['teamTxt'] = trim(strip_tags($team->innertext));

        return $parseTeam;
    }

    /**
     * Fetch team information
     */
    public function fetchTeam()
    {
        $url = $this->domain . $this->uri;
        $dom = HtmlDomParser::file_get_html($url);
        $this->team = $dom;
        $teams = $this->team->find('div[class=item-coureur]');
        $teamsList = array();
        foreach ($teams as $team) {
            $teamsList[] = $this->parseTeam($team);
        }

        return $teamsList;
    }

    /**
     * Parse coach group
     *
     * @param type $group
     *
     * @return type
     */
    public function parseCoachGroup($group, $position)
    {
        $list = array();
        $listItem = $group->find('li[class=item-cartes-encadrement]');
        foreach ($listItem as $stru) {
            $item = array();
            $item['imageUrl'] = ($stru->find('img', 0)) ? $this->domain . $stru->find('img', 0)->src : '';
            $item['detailUrl'] = ($stru->find('a', 0)) ? $this->domain . $stru->find('a', 0)->href . $this->subfixUrl : '';
            if ($stru->find('span', 0)) {
                $name = explode('<br />', $stru->find('span', 0)->innertext);
                $item['firstname'] = trim(strip_tags($name[0]));
                $item['lastname'] = (isset($name[1])) ? trim(strip_tags($name[1])) : '';
                $item['position'] = $position;
            }

            $list[] = $item;
        }

        return $list;
    }

    /**
     * Fetch coach, staff data
     *
     * @return type
     */
    public function fetchCoach()
    {
        $url = $this->domain . $this->uri;
        $dom = HtmlDomParser::file_get_html($url);
        $this->coach = $dom;
        $content = $this->coach->find('div[class=item-page]', 0);
        $h2s = $content->find('h2');
        $groups = array();
        foreach ($h2s as $h2) {
            $arr = $this->parseCoachGroup($h2->next_sibling(), trim($h2->innertext));
            $groups = array_merge($groups, $arr);
        }

        return $groups;
    }

}
