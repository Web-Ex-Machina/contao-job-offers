<?php

declare(strict_types=1);

/**
 * Contao Job Offers for Contao Open Source CMS
 * Copyright (c) 2018-2020 Web ex Machina
 *
 * @category ContaoBundle
 * @package  Web-Ex-Machina/contao-job-offers
 * @author   Web ex Machina <contact@webexmachina.fr>
 * @link     https://github.com/Web-Ex-Machina/contao-job-offers/
 */

namespace WEM\JobOffersBundle\DataContainer;

class JobAlertConditionContainer
{
	/**
     * Design each row of the DCA.
     *
     * @return string
     */
    public function listItems($row)
    {
        return sprintf(
            '%s  = %s',
            $row['field'],
            $row['value']
        );
    }
}