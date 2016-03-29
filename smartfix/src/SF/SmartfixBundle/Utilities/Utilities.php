<?php

namespace SF\SmartfixBundle\Utilities;

use Symfony\Component\HttpFoundation\Response;
use SF\SmartfixBundle\SmartfixBundle;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Utilities
 */
class Utilities
{

    /**
     * Get user
     *
     * @return object | boolean
     */
    public static function getUser()
    {
        $container = SmartfixBundle::getContainer();
        $user = $container->get('security.context')->getToken()->getUser();

        if ($user) {
            return $user;
        }

        return false;
    }

    /**
     * Rename for file
     *
     * @param type $originalName
     *
     * @return string $newName the new file name
     */
    public static function renameForFile($originalName = '')
    {
        $newName = '';
        if (!empty($originalName)) {
            $ext = @end(explode(".", $originalName));
            if (!empty($ext)) {
                $newName = uniqid() . '.' . $ext;
            }
        }

        return $newName;
    }

    /**
     * Check image file
     *
     * @param string $filename filename
     *
     * @return boolean
     */
    public static function checkImageFile($filename)
    {
        $extension = explode('.', $filename);

        $myLastElement = end($extension);
        $mimeTypes = array(
            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
        );

        if (array_key_exists(strtolower($myLastElement), $mimeTypes)) {

            return true;
        } else {

            return false;
        }
    }

    /**
     * Check valid file
     *
     * @param string $file    filename
     * @param array  $options array constraint
     *
     * @return Array
     */
    public static function checkValidFile($file, $options = array())
    {
        $result = array(
            'success' => true,
            'message' => array()
        );

        $constraint = array();
        if (isset($options['mimeTypes'])) {
            $constraint['mimeTypes'] = $options['mimeTypes'];
            if (isset($options['mimeTypesMessage'])) {
                $constraint['mimeTypesMessage'] = $options['mimeTypesMessage'];
            }
        }

        if (isset($options['maxSize'])) {
            $constraint['maxSize'] = $options['maxSize'];
            if (isset($options['maxSizeMessage'])) {
                $constraint['maxSizeMessage'] = $options['maxSizeMessage'];
            }
        }
        $fileConst = new ConstraintsFile($constraint);
        if ($file instanceof UploadedFile && $file->isValid()) {
            $errors = SmartfixBundle::getContainer()->get('validator')->validateValue($file, $fileConst);
            if (count($errors)) {
                $result['success'] = false;
                foreach ($errors as $error) {
                    $result['message'][] = $error->getMessage();
                }
            }
        } else {
            $result['success'] = false;
            $result['message'] = array('File invalid');
        }

        return $result;
    }

    /**
     * getSimpleTypeFile
     *
     * @param string $filename filename
     *
     * @return null|string
     */
    public static function getSimpleTypeFile($filename)
    {
        if ($filename == "") {

            return null;
        }

        $extension = explode('.', $filename);
        $myLastElement = strtolower(end($extension));
        $documentTypes = array('pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx');
        $imageTypes = array('jpg', 'gif', 'png', 'jpeg');
        $videoTypes = array('mp4', 'flv', 'wmv', 'webm');

        if (in_array($myLastElement, $documentTypes)) {

            return 'document';
        }

        if (in_array($myLastElement, $imageTypes)) {

            return 'image';
        }

        if (in_array($myLastElement, $videoTypes)) {

            return 'video';
        }
    }

    /**
     * Clean string
     *
     * @param type $string    string
     * @param type $strSymbol strSymbol
     * @param type $length    length
     *
     * @return type
     */
    public static function cleanString($string, $strSymbol = '-', $length = 255)
    {
        $arrCharFrom = array(
            "ạ", "á", "à", "ả", "ã", "Ạ", "Á", "À", "Ả", "Ã",
            "â", "ậ", "ấ", "ầ", "ẩ", "ẫ", "Â", "Ậ", "Ấ", "Ầ", "Ẩ", "Ẫ",
            "ă", "ặ", "ắ", "ằ", "ẳ", "ẵ", "ẫ", "Ă", "Ắ", "Ằ", "Ẳ", "Ẵ", "Ặ",
            "ê", "ẹ", "é", "è", "ẻ", "ẽ", "Ê", "Ẹ", "É", "È", "Ẻ", "Ẽ",
            "ế", "ề", "ể", "ễ", "ệ", "Ế", "Ề", "Ể", "Ễ", "Ệ",
            "ọ", "ộ", "ổ", "ỗ", "ố", "ồ", "Ọ", "Ộ", "Ổ", "Ỗ", "Ố", "Ồ", "Ô", "ô",
            "ó", "ò", "ỏ", "õ", "Ó", "Ò", "Ỏ", "Õ",
            "ơ", "ợ", "ớ", "ờ", "ở", "ỡ",
            "Ơ", "Ợ", "Ớ", "Ờ", "Ở", "Ỡ",
            "ụ", "ư", "ứ", "ừ", "ử", "ữ", "ự", "Ụ", "Ư", "Ứ", "Ừ", "Ử", "Ữ", "Ự",
            "ú", "ù", "ủ", "ũ", "Ú", "Ù", "Ủ", "Ũ",
            "ị", "í", "ì", "ỉ", "ĩ", "Ị", "Í", "Ì", "Ỉ", "Ĩ",
            "ỵ", "ý", "ỳ", "ỷ", "ỹ", "Ỵ", "Ý", "Ỳ", "Ỷ", "Ỹ",
            "đ", "Đ",
            "›"
        );
        $arrCharEnd = array(
            "a", "a", "a", "a", "a", "A", "A", "A", "A", "A",
            "a", "a", "a", "a", "a", "a", "A", "A", "A", "A", "A", "A",
            "a", "a", "a", "a", "a", "a", "a", "A", "A", "A", "A", "A", "A",
            "e", "e", "e", "e", "e", "e", "E", "E", "E", "E", "E", "E",
            "e", "e", "e", "e", "e", "E", "E", "E", "E", "E",
            "o", "o", "o", "o", "o", "o", "O", "O", "O", "O", "O", "O", "O", "o",
            "o", "o", "o", "o", "O", "O", "O", "O",
            "o", "o", "o", "o", "o", "o",
            "O", "O", "O", "O", "O", "O",
            "u", "u", "u", "u", "u", "u", "u", "U", "U", "U", "U", "U", "U", "U",
            "u", "u", "u", "u", "U", "U", "U", "U",
            "i", "i", "i", "i", "i", "I", "I", "I", "I", "I",
            "y", "y", "y", "y", "y", "Y", "Y", "Y", "Y", "Y",
            "d", "D",
            ""
        );

        $arrCharFilter = str_replace($arrCharFrom, $arrCharEnd, trim($string));

        if (mb_strlen($arrCharFilter, "UTF-8") > $length) {
            $arrCharFilter = mb_substr($arrCharFilter, 0, $length, "UTF-8");
        }

        $arrCharFilter = preg_replace('/[\W|_]+/', $strSymbol, $arrCharFilter);
        $arrCharFilter = trim($arrCharFilter, '-');

        //return strtolower($arrCharFilter);
        return $arrCharFilter;
    }

    /**
     * getCurrentLangKey
     * get current languange key
     *
     * @global type $kernel
     *
     * @return string
     */
    public static function getCurrentLangKey()
    {
        $request = SmartfixBundle::getContainer()->get('request');
        $langKey = $request->getLocale();

        return $langKey;
    }

    /**
     * getParameter
     * get parameter from parameter file
     *
     * @param String $param name of parameter
     *
     * @return String
     */
    public static function getParameter($param)
    {
        $result = SmartfixBundle::getContainer()->getParameter($param);

        return $result;
    }

    /**
     * upload image
     *
     * @param FileUpload $file      File
     * @param string     $image     Image
     * @param string     $directory Directory
     * @param array      $options   array options
     *
     * @return array
     */
    public static function uploadImage(&$file, &$image, $directory, $options = array())
    {
        $result = array(
            'success' => true,
            'message' => array()
        );

        if ($file == null || !($file instanceof UploadedFile)) {
            $result['success'] = false;
            $result['message'] = 'File is null';

            return $result;
        }

        // Check valid image
        if (count($options)) {
            $result = Utilities::checkValidFile($file, $options);
            if (!$result['success']) {

                return $result;
            }
        }

        $newName = Utilities::renameForFile($file->getClientOriginalName());

        // Upload image
        $file->move($directory, $newName);

        if (isset($options['create_thumb'])) {
            // Generate thumb for this image
            $thumbWidth = null;
            if (isset($options['thumbWidth'])) {
                $thumbWidth = $options['thumbWidth'];
            }

            $thumbHeight = null;
            if (isset($options['thumbHeight'])) {
                $thumbHeight = $options['thumbHeight'];
            }
        }

        // Check if we have an old image and delete it
        Utilities::removeImage($image, $directory);

        $image = $newName;
        $file = null;

        return $result;
    }

    /**
     * remove image with name image and directory of image
     *
     * @param string $image
     * @param string $directory
     *
     * @return void
     */
    public static function removeImage($image, $directory)
    {
        if (isset($image) && ($image != null)) {
            // delete the old image
            $link = $directory . '/' . $image;
            if (file_exists($link) && is_file($link)) {
                unlink($link);
            }

            // delete the old image thumb
            $link = $directory . '/thumb_' . $image;
            if (file_exists($link) && is_file($link)) {
                unlink($link);
            }
        }
    }

    /**
     * get containter in Admin bunblde
     *
     * @return Object
     */
    public static function getContainer()
    {
        return SmartfixBundle::getContainer();
    }

    /**
     * get entity manager
     *
     * @return Object
     */
    public static function getEntityManager()
    {
        return SmartfixBundle::getContainer()->get('doctrine')->getEntityManager();
    }

    /**
     * Cut text
     *
     * @param string  $text      Text to cut
     * @param int     $start     Start position
     * @param int     $length    Length of text
     * @param boolean $format    Keep whole word
     * @param String  $separator Text of separator
     *
     * @return string $text
     */
    public static function cutText($text = '', $start = 0, $length = 0, $format = true, $separator = '...')
    {
        if (!empty($text) && strlen($text) > $length) {
            $text = substr($text, $start, $length);
            if ($format) {
                $text = substr($text, $start, (strlen($text) - (strlen($text) - strrpos($text, ' ', -1))));
            }

            return $text . $separator;
        } else {


            return $text;
        }
    }
}

