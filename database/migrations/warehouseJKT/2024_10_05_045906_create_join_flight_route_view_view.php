<?php

use Illuminate\Database\Migrations\Migration;

class CreateJoinFlightRouteViewView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView()
    {
        return <<<'SQL'
            CREATE VIEW `join_flight_route_view` AS select distinct `a`.`WarehouseCode` AS `WarehouseCode`,`a`.`TwoLetterCode` AS `TwoLetterCode`,`a`.`FlightNumber` AS `FlightNumber`,`a`.`TimeDeparture` AS `TimeDeparture`,`a`.`TimeArrival` AS `TimeArrival`,`b`.`Route` AS `Route` from (`mst_flight` `a` join `mst_route` `b` on(`a`.`TwoLetterCode` = `b`.`TwoLetterCode` and `a`.`WarehouseCode` = `b`.`WarehouseCode`)) where `a`.`Void` = 0 and `b`.`Void` = 0
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `join_flight_route_view`;
        SQL;
    }
}
