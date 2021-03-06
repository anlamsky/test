<?php

namespace SF\SmartfixBundle\Entity;

use Doctrine\ORM\EntityRepository;
use SF\SmartfixBundle\Entity\ClientDevice;

/**
 * ClientDeviceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientDeviceRepository extends EntityRepository
{
    public function isLoginOnNewDevice($client, $deviceID, $operationSystem, $deviceToken)
    {
        $entity = $this->findBy(array(
            'clientId' => $client,
            'deviceId' => $deviceID,
            'operatingSystem' => $operationSystem,
        ));

        $em = $this->getEntityManager();

        if (is_array($entity) || !$entity) {

            $entity = new ClientDevice();
            $entity->setClientId($client->getId());
            $entity->setDeviceId($deviceID);
            $entity->setOperatingSystem($operationSystem);

            //login on new device, insert device info to database
            $check = TRUE;
        }

        $entity->setDeviceToken($deviceToken);

        $em->persist($entity);
        $em->flush();

        //using old device
        return $check;
    }
}
