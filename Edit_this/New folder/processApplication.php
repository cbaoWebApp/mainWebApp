<?php
session_start();
if (isset($_SESSION['printForm'])) {
   if (basename($_SERVER['PHP_SELF']) !== $_SESSION['printForm']) {
        unset($_SESSION['$lName']);
		unset($_SESSION['$fName']);
        unset($_SESSION['$mName']);
		unset($_SESSION['$formOfOwnership']);
		unset($_SESSION['$kindOfBusiness']);
		unset($_SESSION['$Address']);
		unset($_SESSION['$contactNumber']);
		unset($_SESSION['$location']);
		unset($_SESSION['$newConstruction']);
		unset($_SESSION['$additionOf']);
		unset($_SESSION['$repairOf']);
		unset($_SESSION['$renovationOf']);
		unset($_SESSION['$demolitionOf']);
		unset($_SESSION['$others1']);
		unset($_SESSION['$others2']);
		unset($_SESSION['$others3']);
		unset($_SESSION['$others4']);
		unset($_SESSION['$numberOfUnits']);
		unset($_SESSION['$tec1']);
		unset($_SESSION['$tec2']);
		unset($_SESSION['$tec3']);
		unset($_SESSION['$tec4']);
		unset($_SESSION['$tec5']);
		unset($_SESSION['$tec6']);
		unset($_SESSION['$cei1']);
		unset($_SESSION['$cei2']);
		unset($_SESSION['$cei3']);
		unset($_SESSION['$storey']);
		unset($_SESSION['$floorArea']);
		unset($_SESSION['$constructionDate']);
		unset($_SESSION['$SPRC']);
		unset($_SESSION['$SFirstName']);
		unset($_SESSION['$SmiddleInitial']);
		unset($_SESSION['$SlastName']);
		unset($_SESSION['$Saddress']);
		unset($_SESSION['$ctc']);
		unset($_SESSION['$ctcDate']);
		unset($_SESSION['$ctcPlace']);
		unset($_SESSION['$CPRC']);
		unset($_SESSION['$CFirstName']);
		unset($_SESSION['$CmiddleInitial']);
		unset($_SESSION['$ClastName']);
		unset($_SESSION['$Ccaddress']);
		unset($_SESSION['$ptrNo']);
		unset($_SESSION['$dateIssued']);
		unset($_SESSION['$placeIssued']);
		unset($_SESSION['$tin']);
		unset($_SESSION['$tct']);
		unset($_SESSION['$OFirstName']); 
		unset($_SESSION['$OmiddleInitial']); 
		unset($_SESSION['$OlastName']);
		unset($_SESSION['$Ocaddress']);
		unset($_SESSION['$Octc']);
   }
}

//ADDED CODES
$id = $_GET['id'];
$conn = new mysqli('localhost', 'root', '', 'baguio_cbao');

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    $sql = "SELECT * FROM applicant JOIN bpform USING (applicant_id) WHERE applicant_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
      //row not found
      echo "<script type=\"text/javascript\">".
          "alert('No record');".
          "</script>";
    }else{
    	if($row = mysqli_fetch_array($result)){
    		$lastName = $row['last_name'];
    		$firstName = $row['first_name'];
    		$middleInitial = $row['middle_initial'];
    		$tin = $row['tin'];
    		$location = $row['location'];
    	}
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../common/head.php'; ?>

        <link rel="stylesheet" href="../css/bpForm.css">
        <link rel="stylesheet" href="../btstrp/css/bootstrap.css">
		
		<style>
			.right-inner-addon {
			position: relative;
			}
			.right-inner-addon input {
			padding-right: 30px;    
			}
			.right-inner-addon span {
			position: absolute;
			right: 0px;
			padding: 8px 10px;		
			}
		</style>
		
    </head>
    <body>  
        <?php include '../common/header.php'; ?>
		
        <div class="content">
            <div class="main">
                <h1 id = "heading">Process Application</h1>
            </div>
        </div>
        <div class="container">

            <div class = "col-md-3">
                <div id="sidebar">
                    <div id="nav-anchor"></div>
                    <nav>
                        <ul>
                            <li><a href="#box1"><div>Application Information</div></a></li>
                            <li><a href="#box3A"><div>Routing Slip</div></a></li>
                            <li><a href="#box6"><div>Fees Assessment</div></a></li>
                            <li><a href="#box7"><div>Summary</div></a></li>
                            <!--<li><a href="#box8"><div>Community Tax Certificate</div></a></li>
                            <li><a href="#box9"><div>Lot Owner</div></a></li>
                            <li><a href="#trackingAcc"><div>Tracking Account Credentials</div></a></li>-->
                        </ul>
                    </nav>
                </div>
            </div>
					
            <div class = "col-md-9">
                <div class = "scroll">
                        <h4>Application Information</h4>
						 <form class="form-horizontal" action="processBpForm.php" onsubmit="return validate(this);" method="post">
                            <div class="form-group">
                                <label for="lastName" class="control-label col-xs-4">Last Name:</label>
                                <!--<div class="col-xs-8">
                                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php if(!empty($_SESSION['$lName'])){echo $_SESSION['$lName']; unset($_SESSION['$lName']);}?>" placeholder="Last Name"><span class="error-msg"><?php if(!empty($_SESSION['$lnameErr'])){echo $_SESSION['$lnameErr']; unset($_SESSION['$lnameErr']);}?><?php if(!empty($_SESSION['$lnameErr2'])){echo $_SESSION['$lnameErr2']; unset($_SESSION['$lnameErr2']);}?></span>  
                                </div>-->
                                <?php echo $lastName ?>
                            </div>
                            <div class="form-group">
                                <label for="firstName" class="control-label col-xs-4">First Name:</label>
                                <!--<div class="col-xs-8">
                                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?php if(!empty($_SESSION['$fName'])){echo $_SESSION['$fName']; unset($_SESSION['$fName']);}?>" placeholder="First Name"><span class="error-msg"><?php if(!empty($_SESSION['$fnameErr'])){echo $_SESSION['$fnameErr']; unset($_SESSION['$fnameErr']);}?><?php if(!empty($_SESSION['$fnameErr2'])){echo $_SESSION['$fnameErr2']; unset($_SESSION['$fnameErr2']);}?></span>
                                </div>-->
                                <?php echo $firstName ?>
                            </div>
                            <div class="form-group">
                                <label for="middleInitial" class="control-label col-xs-4">Middle Initial:</label>
                                <!--<div class="col-xs-8">
                                    <input type="text" class="form-control" id="middleInitial" name="middleInitial"  value="<?php if(!empty($_SESSION['$mName'])){echo $_SESSION['$mName']; unset($_SESSION['$mName']);}?>" placeholder="Middle Initial"><span class="error-msg"><?php if(!empty($_SESSION['$mnameErr'])){echo $_SESSION['$mnameErr']; unset($_SESSION['$mnameErr']);}?><?php if(!empty($_SESSION['$mnameErr2'])){echo $_SESSION['$mnameErr2']; unset($_SESSION['$mnameErr2']);}?></span>
                                </div>-->
                                <?php echo $middleInitial ?>
                            </div>
                            <div class="form-group">
                                <label for="TaxAccNo" class="control-label col-xs-4">TIN:</label>
                                <!--<div class="col-xs-8">
									<div class="right-inner-addon table-error">
										<a>
										<span class="glyphicon glyphicon-question-sign red" data-toggle="tooltip" data-placement="left" title="Example. 000-111-222-333"></span>
										<input type="text" class="form-control" id="TaxAccNo" name="TaxAccNo" value="<?php if(!empty($_SESSION['$TaxAccNo'])){echo $_SESSION['$TaxAccNo']; unset($_SESSION['$TaxAccNo']);}?>" placeholder="Tax Account Number">
										</a>										
									</div>
									<span class="error-msg"><?php if(!empty($_SESSION['$TaxAccNoErr'])){echo $_SESSION['$TaxAccNoErr']; unset($_SESSION['$TaxAccNoErr']);}?><?php if(!empty($_SESSION['$TaxAccNoErr2'])){echo $_SESSION['$TaxAccNoErr2']; unset($_SESSION['$TaxAccNoErr2']);}?></span>
							   </div>-->
							   <?php echo $tin ?>
                            </div>
                            <div class="form-group">
                                <label for="enterpriseName" class="control-label col-xs-4">Location of Construction:</label>
                                <!--<div class="col-xs-8">
                                    <input type="text" class="form-control" id="enterpriseName" name="enterpriseName" value="<?php if(!empty($_SESSION['$entName'])){echo $_SESSION['$entName']; unset($_SESSION['$entName']);}?>" placeholder="Enterprise Name"><span class="error-msg"><?php if(!empty($_SESSION['$entNameErr'])){echo $_SESSION['$entNameErr']; unset($_SESSION['$entNameErr']);}?></span>
                                </div>-->
                                <?php echo $location ?>
                            </div>
					<div class = "buttons">
						<input type="submit" id ="regSub" value="Cancel"/>
						<input type="submit" id ="regSub" value="Routing Slip"/>

                    </div>
					</form>
                </div>                                      
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php include '../common/footer.php'; ?>

<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip({
        'html': true
    });
});
</script>

<script>
function validate(form) {
	return confirm('All the information entered in the form can not be edited after submit. Do you really want to submit?');
	}
</script>

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
            var div_top = $('#nav-anchor').offset().top;
            if (window_top > div_top) {
                $('nav').addClass('stick');
            } else {
                $('nav').removeClass('stick');
            }
        });

        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $("nav a").click(function (evn) {
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });

        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and 
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values

        $(window).scroll(function () {
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i = 0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }

            if (windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }
        });
		
		/**
		* Select option.
		*/
    });
</script>

<script src="jquery-1.12.0.min.js" type="text/javascript"></script>
<script>
 $(document).ready(function () {
var residential = [
		{display:"SINGLE", value:"single"},
		{display:"DUPLEX", value:"duplex"},
		{display:"ROWHOUSE/ACCESSORIA", value:"rowhouse/accessoria"},
		{display:"OTHERS", value:"others"}];
		
		var commercial = [
		{display:"BANK", value:"bank"},
		{display:"STORE", value:"store"},
		{display:"HOTEL,MOTEL, ETC.", value:"hotel,motel, etc."},
		{display:"OFFICE CONDOMINIUM/BUSINESS OFFICE BUILDING", value:"office condominium/business office building"},
		{display:"RESTAURANT, ETC.", value:"restaurant, etc."},
		{display:"SHOP (E.G. DRESS SHOP, TAILORING SHOP, BARBER SHOP, ETC.", value:"shop"},
		{display:"GASOLINE STATION", value:"gasoline station"},
		{display:"MARKET", value:"market"},
		{display:"DORMITORY OR OTHER LODGING HOUSE", value:"dormitory or other lodging house"},
		{display:"OTHERS", value:"others"}];
				
		var street = [
		{display:"PARKS, PLAZAS, MONUMENTS, POOLS, PLANT BOXES, ETC.", value:"parks, plazas, monuments, pools, plant boxes, etc."},
		{display:"SIDEWALKS, PROMENADES, TARRACES, LAMPPOSTS, ELECTRIC POLES, TELEPHONE POLES, ETC.", value:"duplex"},
		{display:"OUTDOOR ADS, SIGNBOARDS, ETC.", value:"outdoor ads, signboards, etc."},
		{display:"FENCE ENCLOSURE", value:"fence enclosure"}];

		var industrial = [
		{display:"FACTORY/PLANT", value:"factory/plant"},
		{display:"REPAIR SHOP, MACHINE SHOP", value:"repair shop, machine shop"},
		{display:"REFINERY", value:"refinery"},
		{display:"PRINTING PRESS", value:"printing press"},
		{display:"WAREHOUSE", value:"warehouse"},
		{display:"OTHERS", value:"others"}];
		
		var institutional = [
		{display:"SCHOOL", value:"school"},
		{display:"CHURCH AND OTHER RELIGIOUS STRUCTURES", value:"church and other religious structures"},
		{display:"HOSPITAL OR SIMILAR STRUCTURE", value:"hospital or similar structure"},
		{display:"WELFARE AND CHARITABLE STRUCTURES", value:"welfare and charitable structures"},
		{display:"THEATER, AUDITORIUM, GYMNASIUM, COURT", value:"theater, auditorium, gymnasium, court"},
		{display:"OTHERS", value:"others"}];
		
		var agricultural = [
		{display:"BARN(S) POULTRY HOUSE(S), ETC.", value:"barn(s) poultry house(s), etc."},
		{display:"GRAIN MILL", value:"grain mill"},
		{display:"OTHERS", value:"others"}];
		
		
		//If parent option is changed
		$("#parent_typeOfOccupancy").change(function() {
				var parent = $(this).val(); //get option value from parent 
				
				switch(parent){ //using switch compare selected option and populate child
					case 'residential':
						list(residential);
						$("#other_typeOfOccupancy").html("");
						break;
					case 'commercial':
						list(commercial);
						$("#other_typeOfOccupancy").html("");
						break;              
					case 'street furniture, landscaping, signboards':
						list(street);
						$("#other_typeOfOccupancy").html("");
						break;
					
					case 'industrial':
						list(industrial);
						$("#other_typeOfOccupancy").html("");
						break;
					
					case 'institutional':
						list(institutional);
						$("#other_typeOfOccupancy").html("");
						break;              
					
					case 'agricultural':
						list(agricultural);
						$("#other_typeOfOccupancy").html("");
						break;
						
					case 'others':
						createTextField();
						$("#other_typeOfOccupancy").html("");
						break;
				   }
		});
		
		$("#child_typeOfOccupancy").on("change", "#select_typeOfOccupancy", function(){
			var child = $(this).val();
			
			switch(child){
				case "others":
					$("#other_typeOfOccupancy").append("<input type=\"text\" id=\"specific2\"/>");
					break;
					
				default:
					$("#other_typeOfOccupancy").html("");
					break;
			}
		});

		//function to populate child select box
		function list(array_list)
		{	
			$("#child_typeOfOccupancy").html(""); //reset child options
			$("#child_typeOfOccupancy").append("<select name=\"select_typeOfOccupancy\" id=\"select_typeOfOccupancy\">");
			$("#select_typeOfOccupancy").append("<option disabled>SELECT SPECIFIC TYPE OF OCCUPANCY</option>");
			$(array_list).each(function (i) { //populate child options 
				$("#select_typeOfOccupancy").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
			});
			$("#child_typeOfOccupancy").append("</select>");
		}
		
		function createTextField(){
			$("#child_typeOfOccupancy").html(""); 
			$("#child_typeOfOccupancy").append("<input type=\"text\" id=\"specific1\">");
		}
		
		})(jQuery);
</script>
 
</body>

</html>
