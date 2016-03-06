<div class = "col-md-9">
    <div class = "scroll">
        <div class = "info">
            <h5>Applicant Number: 
                <?= $id ?>
            </h5>
            <h5>Date of Application:
                <?= $doa ?>
            </h5>
            <h5>Applicant Name:
                <?= $name ?>
            </h5>	
        </div>
        <hr>

        <div class = "sections">
            <h4>Line and Grade Section</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $lg_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $lg_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $lg_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $lg_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>                        

            <h4>Architectural Section</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $a_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $a_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $a_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $a_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Structural Section</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $struc_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $struc_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $struc_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $struc_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Sanitary Section</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $san_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $san_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $san_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $san_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Electrical Section</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $e_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $e_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $e_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $e_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Mechanical Section</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $m_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $m_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $m_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $m_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Chief Processing Officer (CPO)</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $cpo_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $cpo_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $cpo_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $cpo_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Assistant Building Official</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $abo_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $abo_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $abo_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $abo_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>

            <h4>Building Official (BO)</h4>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="date_received" class="control-label col-xs-3">Date Received:</label>
                    <h5><?= $bo_date_received ?></h5>
                    <br>
                    <label for="time_in" class="control-label col-xs-3">Timestamp In:</label>
                    <h5><?= $bo_time_in ?></h5>
                    <br>
                    <label for="time_out" class="control-label col-xs-3">Timestamp Out:</label>
                    <h5><?= $bo_time_out ?></h5>
                </div>
                <div class="form-group">
                    <label for="comments" class="control-label col-xs-3">Comments:</label>
                    <h5><?= $bo_comment ?></h5>
                </div>
                <div class="form-group">
                    <label for="appName" class="control-label col-xs-3">Fees:</label>
                    <h5>No Assessment record yet.</h5>
                </div>
            </form>
            <div class = "buttons">
                <button class="btn1">View Record</button>
            </div>


            <hr>
            <h4>Total Application Fees:</h4>
        </div>
    </div>	
</div>
