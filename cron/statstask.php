<?php

/**
 * ownCloud - Dashboard
 *
 * @author Patrick Paysant <ppaysant@linagora.com>
 * @copyright 2014 CNRS DSI
 * @license This file is licensed under the Affero General Public License version 3 or later. See the COPYING file.
 */

namespace OCA\Dashboard\Cron;

use \OCA\Dashboard\App\Dashboard;

class StatsTask {

    public static function run() {
        if (\OCP\Config::getSystemValue('dashboard_no_cron', false)) {
            return;
        }

        $app = new Dashboard();
        $container = $app->getContainer();
        $container->query('StatsTaskService')->run();
    }

}
