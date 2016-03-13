<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once '../../common/head.php'; ?>
    </head>
    <body>
        <?php include_once '../../common/personnel_header.php'; ?>

        <div class="container">
            <div class="content">
                <div class="main">

                    <h1 id = "heading">Sanitary Section - Process Application</h1>
                    <form action="processing/sanitary_total_fees.php" method="POST">
                        <table>
                            <thead>
                                <tr>
                                    <td>KIND OF FIXTURE</td>
                                    <td>QUANTITY</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Water Closet</td>
                                    <td><input type="number" id="water_closet" name="water_closet" min="0" step="1" placeholder="0" required> </td>                                    
                                </tr>
                                <tr>
                                    <td>Floor Drain</td>
                                    <td><input type="number" id="floor_drain" name="floor_drain" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Sink</td>
                                    <td><input type="number" id="sink" name="sink" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Lavatory</td>
                                    <td><input type="number" id="lavatory" name="lavatory" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Faucet</td>
                                    <td><input type="number" id="faucet" name="faucet" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Shower Head</td>
                                    <td><input type="number" id="shower_head" name="shower_head" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Slop Sink</td>
                                    <td><input type="number" id="slop_sink" name="slop_sink" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Urinal</td>
                                    <td><input type="number" id="urinal" name="urinal" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Bath Tub</td>
                                    <td><input type="number" id="bath_tub" name="bath_tub" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Grease Trap</td>
                                    <td><input type="number" id="grease_trap" name="grease_trap" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Garage Trap</td>
                                    <td><input type="number" id="garage_trap" name="garage_trap" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Bidet</td>
                                    <td><input type="number" id="bidet" name="bidet" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Dental Cuspidor</td>
                                    <td><input type="number" id="dental_cuspidor" name="dental_cuspidor" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Gas-fired Water Heater</td>
                                    <td><input type="number" id="water_heater" name="water_heater" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Drinking Fountain</td>
                                    <td><input type="number" id="drinking_fountain" name="drinking_fountain" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Bar Fountain Sink</td>
                                    <td><input type="number" id="bar_fountain" name="bar_fountain" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Soda Fountain Sink</td>
                                    <td><input type="number" id="soda_fountain" name="soda_fountain" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Laundry Sink</td>
                                    <td><input type="number" id="laundry_sink" name="laundry_sink" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Laboratory Sink</td>
                                    <td><input type="number" id="laboratory_sink" name="laboratory_sink" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Fixed-type Sterilizer</td>
                                    <td><input type="number" id="sterilizer" name="sterilizer" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Water Meter</td>
                                    <td><input type="number" id="water_meter" name="water_meter" min="0" step="1" placeholder="0" required> </td>
                                </tr>
                                <tr>
                                    <td>Pipe Size in mm</td>
                                    <td><input type="number" id="water_meter_size" name="water_meter_size" min="12" step="1" placeholder="0" required></td>
                                </tr>
                                <tr>
                                    <td>Septic Tank</td>
                                    <td><input type="checkbox" id="septic_tank" name="septic_tank" value="true" required> </td>
                                </tr>
                                <tr>
                                    <td>Digestion Chamber size in cubic meters</td>
                                    <td><input type="number" id="septic_tank_constr" name="septic_tank_constr" min="0.00" step="0.01" placeholder="0" required></td>
                                </tr>
                                <tr>
                                    <td>TOTAL QUANTITY</td>
                                    <td><input type="number" id="total_quantity" name="total_quantity" min="0" step="1" placeholder="0" readonly="true"> </td>
                                </tr>
                                <tr>
                                    <td>TOTAL COMPUTED FEE</td>
                                    <td><input type="number" id="total_fee" name="total_fee" min="0" step="1" placeholder="0" readonly="true"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <input type="submit" value="Save">
                        </div>
                    </form>

                </div>
            </div>
        </div>       

        <?php include_once '../../common/footer.php'; ?>

    </body>
</html>

