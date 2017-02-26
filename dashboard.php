<?php 
    session_start();
   $_SESSION['user_session'];
   
//   if(!isset($_SESSION['user_session'])){
//       header("location:DatabaseConnection/Logout.php");
//   }
   
    if(isset($_POST['submit']))
    {
        echo "<script type='text/javascript'>alert(Hello);</script>";
        // username and password sent from form
        $job_label=$_POST['job_label'];
        $job_department=$_POST['department_name'];
        $job_post=$_POST['post'];
        $job_state=$_POST['state'];
        $job_vacancies=$_POST['number_of_vacancies'];
        $job_age_limit=$_POST['age_limit'];
        $job_educational_qualification=$_POST['education_qualification'];
        $job_pay_scale=$_POST['pay_scale'];
        $job_selection_process=$_POST['selection_process'];
        $job_date_of_publish=$_POST['date_of_publish'];
        $job_last_date_of_fee_submission=$_POST['last_date_of_fees_submission'];
        $job_last_date_of_online_submission=$_POST['last_date_of_online_submission'];
        $job_online_link=$_POST['online_link'];
        $job_fees=$_POST['fees'];
        $job_other=$_POST['others'];
        
        echo "<script type='text/javascript'>alert('$job_last_date_of_fee_submission');</script>";

        $status_post = $job->register($job_label,$job_department,$job_post,$job_state,$job_vacancies,$job_age_limit,$job_educational_qualification,$job_pay_scale,$job_selection_process,$job_date_of_publish,$job_last_date_of_fee_submission,$job_last_date_of_online_submission,$job_online_link,$job_fees,$job_other);
        
        //echo "<script type='text/javascript'>alert('$status_post');</script>";
    }
?>
<!doctype HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAUKRI-SAMACHAR | DASHBOARD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font.css">
        
        <link rel="icon"       href="images/ns_logo_favicon.png">
        <style>
/*            .fixed-action-btn{
                position:relative;
              margin:0 0 0 0 !important;  
            }*/
        </style>
    </head>   
    
    <body class="blue-grey darken-3" style="font-family:carnas_regular">
        <!--<div class="page-wrap" >--> 
            <div class="container-fluid">
                <div class="row">
                    <!--dashboard header starts here -->
                    <div class="col l12 m12 s12 card" style="margin:0 0 0 0;position:fixed;z-index: 1000" >
                        <div class="col l2 m2 s2" style="margin:1% 0 0 0">
                            <!--<a class="home black-text btn-floating blue"><i class="fa fa-home"></i></a>-->
                            <img src="images/profile_pic.jpg"  class=" center btn-floating" width="50" style="margin: 0 0 0 30%">
                            <br>
                            <span style="margin:2% 0 0 0;line-height:3" >Welcome <?php echo $_SESSION['user_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <div class="col l7 m7 s7">
                            <h2 class="center">DASHBOARD</h2>
                        </div>
                        <div class="col l13 m3 s3 right">
                            <br>
                            <div class="fixed-action-btn horizontal  right" style="position:relative;margin:8% 0 0 0;z-index: 10000"> <!-- add class right and css position relative -->
                                <a class="btn-floating btn-large blue-grey darken-3 dashboard-navbar"> <i class="material-icons">menu</i></a>
                                <ul>
                                    <li><a class="home btn-floating tooltipped blue" data-position="bottom" data-delay="50" data-tooltip="Home">
                                        <i class="fa fa-home"></i>
                                    </a></li>
                                    <li><a class="job_entry btn-floating tooltipped orange" data-position="bottom" data-delay="50" data-tooltip="Job Entry">
                                        <i class="fa fa-keyboard-o"></i>
                                    </a></li>

                                    <li><a class="job_list btn-floating tooltipped yellow darken-1" data-position="bottom" data-delay="50" data-tooltip="Job List">
                                        <i class="fa fa-list"></i>
                                    </a></li>

                                    <li><a class="user_account btn-floating tooltipped green" data-position="bottom" data-delay="50" data-tooltip="User Account">
                                        <i class="fa fa-user"></i>
                                    </a></li>

                                    <li><a href="DatabaseConnection/Logout.php" class="btn-floating tooltipped red" data-position="bottom" data-delay="50" data-tooltip="Log Out">
                                        <i class="fa fa-power-off"></i>
                                    </a></li>
                                </ul>
                            </div>
                            <!--dashboard-navbar ends here-->
                           
                         
                        </div>
                    </div>
                     <!--dashboard header ends here -->
                         
                    <!--main section - page included-->
                    <div class="col l12 m12 s12 " style="margin: 7% 0 0 0">
                        <div class="row card   " id="dashboard_home">
                                <?php include "dashboard_home.php";?>
                        </div> 
                        
                        <div class="row " id="job_entry_main">
                            <?php include "dashboard_job_entry.php";?>
                        </div>
                        
                        <div class="row" id="job_list_main">
                            <?php include "dashboard_job_list.php"; ?>
                        </div>
                        
                        <div class="row" id="user_account_main">
                            <?php include "dashboard_user_account.php"; ?>
                            
                        </div>
                        <br>
                        <!--<p class="center white-text">All rights reserved &copy; 2016 xgarbagelab.com</p>-->
                    </div>
                    <!--main section - page included-->
                </div>
            </div>
        
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
      <script src="js/dashboard.js"></script>
      <script>
          //select
        $(function() {
            $('select').material_select();
            $('.date').pickadate();
            
          });
        </script>
        <script>
    $(function(){
        /* pagination */
    $.fn.pageMe = function(opts){
        var $this = this,
            defaults = {
                perPage: 7,
                showPrevNext: false,
                numbersPerPage: 1,
                hidePageNumbers: false
            },
            settings = $.extend(defaults, opts);

                           </div> 
                            <div class="row " id="job_entry_main">
                                <?php include "dashboard_job_entry.php";?>
                            </div>                            
                            <!-- 2. JOB ENTRY-->
<!--                            <form method="post">
                                <div class="col l10 m10 s10 card" id="job_entry_main">
                                    <h1 class="center">JOB ENTRY</h1><hr>
                                    <div class="input-field col l4 m4 s6">
                                        <input type="text"  id="job_label" class="clear validate" name ="job_lable">
                                        <label for="job_label">Job Label</label>
                                    </div>
                                    <div class="input-field col l4 m4 s6">
                                        <input type="text"  id="department_name" class="clear validate" name="department_name">
                                        <label for="department_name">Department Name</label>
                                    </div>


        var listElement = $this;
        var perPage = settings.perPage; 
        var children = listElement.children();
        var pager = $('.pagination');

        if (typeof settings.childSelector!="undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector!="undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.size();
        var numPages = Math.ceil(numItems/perPage);

        pager.data("curr",0);

        if (settings.showPrevNext){
            $('<li><a href="#" class="prev_link">&lsaquo;</a></li>').appendTo(pager);
        }

        var curr = 0;
        while(numPages > curr && (settings.hidePageNumbers==false)){
            $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.numbersPerPage>1) {
           $('.page_link').hide();
           $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
        }

        if (settings.showPrevNext){
            $('<li><a href="#" class="next_link">&rsaquo;</a></li>').appendTo(pager);
        }


        pager.find('.page_link:first').addClass('active');
        if (numPages<=1) {
            pager.find('.next_link').hide();
        }
            pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function(){
            var clickedPage = $(this).html().valueOf()-1;
            goTo(clickedPage,perPage);
            return false;
        });
        pager.find('li .prev_link').click(function(){
            previous();
            return false;
        });
        pager.find('li .next_link').click(function(){
            next();
            return false;
        });

        function previous(){
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }


        function next(){
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }
                                           <div class="col l4 m6 s12 ">
    <!--                                            <button class="btn waves-effect waves-light" id="save_submit">Save & Submit
                                                    <i class="material-icons right">send</i>
                                                </button>-->
                                                <a class=" blue white-text btn "  id="save_submit" name="save_submit">SAVE & SUBMIT<i class="material-icons right">send</i></a>
                                            </div>
                                        </div>
                                </div>
                            </form>-->


        function goTo(page){
            var startAt = page * perPage,
                endOn = startAt + perPage;

            children.css('display','none').slice(startAt, endOn).show();

            if (page>=1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }

            if (page<(numPages-1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }

            pager.data("curr",page);

            if (settings.numbersPerPage>1) {
                    $('.page_link').hide();
                    $('.page_link').slice(page, settings.numbersPerPage+page).show();
            }

            pager.children().removeClass("active");
            pager.children().eq(page+1).addClass("active");  
        }
    };

    $('#pages').pageMe({pagerSelector:'#myPager',childSelector:'.page',showPrevNext:true,hidePageNumbers:false,perPage:1});

        });
</script>

<script>
    $(function(){
//        $('.checkbox_action').click(function(){
//           $('#modfiy_action_button').slideToggle(1000);
//        });

$("input:checkbox").on('click', function() {
//     $('#modfiy_action_button').slideDown(1000);
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
    });
</script>
    </body>
</html>
