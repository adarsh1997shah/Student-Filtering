<?php 
include("filteroptions.php");
if(isset($filter_data))
{
    $filter_data = unserialize($filter_data);
    $data = $filter_data;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="card.css">
    <link rel="stylesheet" type="text/css" href="rangeslider.css">
    <link rel="stylesheet" type="text/css" href="popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


</head>


<body>
    <div class="sidebar-header">
        <header class="header-container">
            <div class="sidebar">
                <span class="sidebarspan"></span>
                <span class="sidebarspan"></span>
                <span class="sidebarspan"></span>
            </div>

            <div class="logo">
                <h1>cvDragon</h1>
            </div>

            <div class="settings">
                <i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
            </div> 
        </header>
    </div>

    <div class="fixed">
        <div class="sortbutton">
            <input type="button" id="namesort" name="namesort"  class="btn btn-primary sort" value="Sort by name">
            <input type="button" id="classX" name="markssort" class="btn btn-primary markssortclassX" value="Sort by marks classX">
            <input type="button" id="classXII" name="markssort" class="btn btn-primary markssortclassXII" value="Sort by marks classXII">
            <input type="button" id="graduation" name="markssort" class="btn btn-primary markssortgraduation" value="Sort by marks graduation">
        </div>
    </div>

    <div class="body-container">

        <div class="col1"></div>

        <div class="col2">
        <div class="filter-container" id="filter">
            <div class="filter-container-header">
                <i class="fa fa-filter" aria-hidden="true"></i>
                <span>Filter</span>
            </div>

            <div class="list-container">

                 <!-- search box -->
                <div class="list=item searchbox">
                <span class="list-heading-text"><i class="fa fa-chevron-down" aria-hidden="true"></i>search</span>
                <div class="search">
                    <input type="text" id="search-box">
                    <span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
                </div>

                <form class="form-option" id="12345" method="POST" action="filter.php">
                    
                    <h5 class="list-container-heading">Batches</h5>
                    <select class="selectpicker" id="batchid" multiple data-live-search="true" name="batch[]  " data-actions-box="true"data-size="5" data-selected-text-format="count > 3">
                   
                        <?php for ($i = 0; $i <count($data['batch'])-1 ; $i++) { ?>
                        <option value="<?php echo($data['batch'][$i]) ?>"><?php echo($data['batch'][$i]) ?></option>
                        <?php } ?>
                        <option value="<?php echo(end($data['batch'])) ?>" selected><?php echo($data['batch'][$i]) ?></option>

                    </select>


                     <h5 class="list-container-heading">Department</h5>
                    <select class="selectpicker" multiple data-live-search="true" name="department[]" data-actions-box="true" data-size="5" data-selected-text-format="count > 3">
                        <?php for ($i = 1000; $i <1011 ; $i++) { ?>
                            <option value="<?php echo($i) ?>"><?php echo($i) ?></option>
                        <?php } ?>
                    </select>



                    <h5 class="list-container-heading">Gender</h5>
                    <select class="selectpicker" multiple data-live-search="true" name="gender[]" data-actions-box="true" data-size="5" data-selected-text-format="count > 3">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>


                    <h5 class="list-container-heading">Grade</h5>
                    <ul>
                        <li>
                            Class X
                            <div class="range-slider">
                            <input type="range" min="1" max="100" name="classX" value="50" class="range-slider__range" id="myRange">
                            <span class="range-slider__value">0</span>
                            </div>
                        </li>

                        <li>
                            Class XII
                            <div class="range-slider">
                            <input type="range" min="1" max="100" value="50" name="classXII" class="range-slider__range" id="myRange">
                            <span class="range-slider__value">0</span>
                            </div>
                        </li>

                        <li> 
                            Graduation
                            <div class="range-slider">
                            <input type="range" min="1" max="100" value="50" name="graduation" class="range-slider__range" id="myRange">
                            <span class="range-slider__value">0</span>
                            </div>
                        </li>


                        <li> 
                            Experience
                            <div class="range-slider">
                            <input type="range" min="1" max="10" value="5" name="experience" class="range-slider__range" id="myRange">
                            <span class="range-slider__value">0</span>
                            </div>
                        </li>
                    </ul>



                    <h5 class="list-container-heading">Soft Skill</h5>
                    <select class="selectpicker"  multiple data-live-search="true" name="softSkills[]" data-actions-box="false"data-size="5" data-selected-text-format="count > 3" data-max-options="5"> 

                    <?php for ($i = 0; $i <count($data['softSkills']) ; $i++) { ?>

                        <option value="<?php echo($data['softSkills'][$i]) ?>"><?php echo($data['softSkills'][$i]) ?></option>
                        
                    <?php } ?>
                        
                     </select>



                    <h5 class="list-container-heading">Technical Skill</h5>
                    <select class="selectpicker"  multiple data-live-search="true" name="technicalSkills[]" data-actions-box="false"data-size="5" data-selected-text-format="count > 3" data-max-options="5">

                    <?php for ($i = 0; $i <count($data['techinalSkills']) ; $i++) { ?>

                        <option value="<?php echo($data['techinalSkills'][$i]) ?>"><?php echo($data['techinalSkills'][$i]) ?></option>
                        
                    <?php } ?>
                        
                     </select>

                     <h5 class="list-container-heading">Languages</h5>
                    <select class="selectpicker"  multiple data-live-search="true" name="language[]" data-actions-box="false" data-size="5" data-selected-text-format="count > 3" data-max-options="5">

                    <?php for ($i = 0; $i <count($data['language']) ; $i++) { ?>

                        <option value="<?php echo($data['language'][$i]) ?>"><?php echo($data['language'][$i]) ?></option>
                        
                    <?php } ?>

                    </select>


                    <h5 class="list-container-heading">Prefered Location</h5>
                    <select class="selectpicker"  multiple data-live-search="true" name="preferredLocation[]" data-actions-box="true" data-size="5" data-selected-text-format="count > 3">

                    <?php for ($i = 0; $i <count($data['prefferedLocation']) ; $i++) { ?>

                        <option value="<?php echo($data['prefferedLocation'][$i]) ?>"><?php echo($data['prefferedLocation'][$i]) ?></option>
                        
                    <?php } ?>

                    </select>
                    
                    <h5 class="list-container-heading">Backlogs</h5>
                    <select class="selectpicker"  multiple data-live-search="true" name="backlog[]" data-actions-box="true" data-size="5" data-selected-text-format="count > 3">

                    <?php for ($i = 0; $i <count($data['backlog']) ; $i++) { ?>

                        <option value="<?php echo($data['backlog'][$i]) ?>"><?php echo($data['backlog'][$i]) ?></option>
                        
                    <?php } ?>
                        
                     </select>
                   
                    <button class="submitbutton" type="submit" name='submit' value="submit" onclick="UdateData(12345)" >Submit</button>
                    <button class="resetbutton">Reset</button>
                
                </form>
            </div>
            <!-- end of list-container -->
        </div>
        <!-- end of filter-container -->
        
            
        <div class="card-parentcontainer">


            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <button id="Email" class="btn btn-primary popup">Email</button>
                <button id="SMS" class="btn btn-primary popup">SMS</button>
                <button id="CVDownload" class="btn btn-primary popup">CV Download</button>
                <button id="SelectAll/None" class="btn btn-primary select">Select All/None</button>
                <button id="Show" type="button" class="btn btn-primary btn-show" data-toggle="modal" data-target="#exampleModalCenter">Show</button>
                </div>
            </div>


            <div class="card-childcontainer" id="filter-heading">
                
            </div>
            <!-- end of card-childcontainer -->

            <div class="pageno">
                <button class="page previous" value="1" onclick="page(this)">Previous</button>
                <button class="page next" value="1" onclick="page(this)">Next</button>
            </div> 

           
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myclear2()">
                            <span aria-hidden="true" >&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modelid">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            onclick="clear()">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- end of modal-content -->
                </div>
                <!-- end of modal-dialog -->
            </div>
            <!-- end of exampleModalCenter -->
            

            <!-- my modal -->
            <div class="modal-parent-container" id="mymodal">
                <div class="modal-container">
                    <div class="pop-upheader"><button class="close-button" onclick="myclear()">&times;</button></div>

                    <div class="pop-up" id="idpop-up"></div>  
                </div>  
            </div>
            <!-- end of mymodal -->

        </div>
        <!-- end of card-parentcontainer -->
        </div>

        <div class="col1"></div>
    </div>
    <!-- end of body-container -->

    

    <script src="basicjs.js"></script>
</body>
</html>