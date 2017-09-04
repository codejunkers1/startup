<?php
include'ideaheader.php';
?>
<style type="text/css">
    body{
        background-image: url('b1.jpg');
        background-repeat: no-repeat;
    }
    input[type="text"], input[type="email"], input[type="tel"], input[type="password"], input[type="phone"] {
    width: 400px;
    position: relative;
    z-index: 99;
    background-color: transparent;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    background-clip: padding-box;
    box-shadow: none;
    outline: none;
    padding: 5px 10px;
    height: 30px;
    line-height: 30px;
    border:1px solid grey;
    margin: 10px;
}
select, textarea {
    width: 420px;
    position: relative;
    z-index: 99;
    background-color: transparent;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    background-clip: padding-box;
    box-shadow: none;
    outline: none;
    padding: 5px 10px;
    height: 30px;
    line-height: 30px;
    border:1px solid grey;
    margin: 10px;
}

</style>
<br><br><br><br><br><br><br>
<center>
    <div style="background-color: white;max-width: 80%;box-shadow: 0 0.3em 1em #000;border-top: 3px solid #DC5041;color: grey;font-weight: bold;font-family: monospace;padding-left: 50px;">

                    <form action="ideasubmitfinal.php" method="post">
                        
                          <div style="color:grey;"> 
                          <br><h1>Experience</h1>
                           
                                
                                    <div>How many years of Startup experience do you have?</div>
                                    <select class="select-options" id="id_exp_years" name="q1">
<option value="Select an option">Select an option</option>
<option value="None">None</option>
<option value="Less than a year">Less than a year</option>
<option value="1 - 5 years">1 - 5 years</option>
<option value="More than 5 years">More than 5 years</option>
</select>
                                  


                                <div><br>
                                    <div>Are you working full time on this venture?</div><br>
                                    <select class="select-options" id="id_full_time" name="q2">
<option value="Select an option">Select an option</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
                                    </div></div>



<div style="color: ;">



                        
                            <h2>Team info</h2>
                           
                                            <div >Number of co-founders</div>
                                            <select class="select-options" id="id_no_cofounders" name="q3">
<option value="Select an option">Select an option</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2 or more">2 or more</option>
</select>
                                        
                                       
                                            <div class="field-name">Number of team members<br/><span>Excluding co-founders</span></div>
                                            <input class="form-control" id="id_no_coreteam" name="q4" type="text" />
                                           
                                     
                              
                                
                                    <div >Do you plan to hire more people? Explain their roles <span>Less than 50 words</span></div>
                                    <textarea class="c-height" cols="40" id="id_add_hire" name="q5" rows="10">
</textarea>
                                
                        </div>

                        <div style="color:;">
                            <h2>Industry sectors</h2>
                            
                                <div class="field-name">Which sector does your startup belong to?</div></div>
                                
                                
                                        <div class="box">
                                            <span class="name">FINTECH</span>
                                            <input type="checkbox" name="q6" value="fintech" id="fitness" class="badgebox">
                                            
                                        </div>
                                    </label>
                                    <label for="health" class="sector_label health">
                                        <div class="box">
                                            <span class="name">HEALTHTECH</span>
                                            <input type="checkbox" name="q6" value="health" id="health" class="badgebox">
                                            
                                        </div>
                                    </label>
                                    <label for="agritech" class="sector_label agritech">
                                        <div class="box">
                                            <span class="name">AGRITECH</span>
                                            <input type="checkbox" name="q6" value="agritech" id="agritech" class="badgebox">
                                            
                                        </div>
                                    </label>
                                    <label for="sustain" class="sector_label sustain">
                                        <div class="box">
                                            <span class="name">SUSTAINABILITY</span>
                                            <input type="checkbox" name="sq6" value="sustainability" id="sustain" class="badgebox">
                                            
                                        </div>
                                    </label>
                                    <label for="social" class="sector_label social">
                                        <div class="box">
                                            <span class="name">SOCIAL</span>
                                            <input type="checkbox" name="q6" value="social" id="social" class="badgebox">
                                            
                                        </div>
                                    </label>
                                    <label for="transport" class="sector_label transport">
                                        <div class="box">
                                            <span class="name">TRANSPORTATION</span>
                                            <input type="checkbox" name="q6" value="transportation" id="transport" class="badgebox">
                                           
                                        </div>
                                    </label>
                                    <label for="smart" class="sector_label smart">
                                        <div class="box">
                                            <span class="name">SMART CITIES</span>
                                            <input type="checkbox" name="q6" value="smartcities" id="smart" class="badgebox">
                                            
                                        </div>
                                    </label>
                                    <label for="edtech" class="sector_label edtech">
                                        
                                            <span class="name">EDTECH</span>
                                            <input type="checkbox" name="q6" value="edtech" id="edtech" class="badgebox">
                                       
                                

    


                          
                        
                        <div style="color: ;">
                        
                            <h2>Start-up Info</h2>


                                    
                                            <div >Please give a one line description of your company.<br/><span>Less than 20 words</span></div>

                                           <textarea class="c-height" cols="40" id="id_mission_statement" name="q7" placeholder="Eg. Freshdesk is a customer service support helpdesk." rows="10">
</textarea>
                                           
                                        
                                        
                                            <div >Describe your business and problem statement.<br/><span>Less than 75 words</span></div>
                                            <textarea class="c-height" cols="40" id="id_desc_business" name="q8" rows="10">
</textarea>
                                       

                           
                                
                                <div >List three local competitors and three global competitors.</div>
                                <textarea class="c-height" cols="40" id="id_competitors" name="q9" placeholder="Please mention either the names or give the url of the companies. If none, please mention N/A." rows="10">
</textarea>
                                            <div >At which stage is your startup in?</div>
                                            <select class="select-options" id="id_lifecycle_stage" name="q10">
<option value="Select an option">Select an option</option>
<option value="Ideation">Ideation</option>
<option value="Conception">Conception</option>
<option value="Committment">Committment</option>
<option value="Validation">Validation</option>
<option value="Launch">Launch</option>
<option value="Scaling">Scaling</option>
<option value="Establishing">Establishing</option>
</select>
</div>
                                         
                        <div style="color: ;">
                            <h2>Differentiability</h2>
                            
                                    <div >Is your solution unique?</div>
                                    <select class="select-options" id="id_sol_unique" name="q11">
<option value="Select an option">Select an option</option>
<option value="No">No</option>
<option value="Yes, no such idea exists.">Yes, no such idea exists.</option>
<option value="The idea has roots in existing solutions but is executed differently">The idea has roots in existing solutions but is executed differently</option>
</select>
                                    
                                
                                    <div >If no, what are the competetive advantages?</div>
                                    <select class="select-options" id="id_not_unique" name="q12">
<option value="Select an option">Select an option</option>
<option value="No advantages, it&#39;s an alternative to current solutions">No advantages, it&#39;s an alternative to current solutions</option>
<option value="The product is cheaper.">The product is cheaper.</option>
<option value="The current solutions are non-tech but my idea is tech-based.">The current solutions are non-tech but my idea is tech-based.</option>
<option value="Not applicable">Not applicable</option>
</select>
                                    
                                    <div >Is there any intellectual property involved?</div>
                                    <select class="select-options" id="id_ip_involved" name="q13">
<option value="Select an option">Select an option</option>
<option value="Patent Granted">Patent Granted</option>
<option value="Patent Pending">Patent Pending</option>
<option value="Planning to file">Planning to file</option>
<option value="No">No</option>
<option value="Non-patentable">Non-patentable</option>
</select>
                                    
                                    <div >What are the entry barriers you have put in place for your competitors?</div>
                                    <select class="select-options" id="id_barriers" name="q14>
<option value="Select an option">Select an option</option>
<option value="Technology barriers">Technology barriers</option>
<option value="Geographic barriers">Geographic barriers</option>
<option value="Product production cost">Product production cost</option>
<option value="Distribution barriers">Distribution barriers</option>
<option value="Product is supported by a government entity">Product is supported by a government entity</option>
<option value="Product is backed by a corporate">Product is backed by a corporate</option>
</select>
                                   
                                <div class="col-md-12">
                                    <div class="field-name">Who is your potential customer and why?<br/><span>Less than 50 words</span></div>
                                    <textarea class="c-height" cols="40" id="id_potential_customer" name="q15" placeholder="Eg: Name of a major client who could use this product." rows="10">
</textarea>
                                    </div>
                                  
                       <div style="color:;">
                            <h2>Market demographics</h2>
                            
                                    <div c>Nature of startup</div>
                                    <select class="select-options" id="id_startup_nature" name="q16">
<option value="Select an option">Select an option</option>
<option value="Business to business">Business to business</option>
<option value="Business to customers">Business to customers</option>
<option value="B2B2C">B2B2C</option>
<option value="Business to Government">Business to Government</option>
<option value="Consumer to Consumer">Consumer to Consumer</option>
</select>
                                    
                                    <div >Geographic target area</div>
                                    <select class="select-options" id="id_geo_target" name="q17">
<option value="Select an option">Select an option</option>
<option value="Locally in my city">Locally in my city</option>
<option value="Locally in my country">Locally in my country</option>
<option value="To neighboring countries">To neighboring countries</option>
<option value="Internationally">Internationally</option>
</select>
                                   <br>Total addressable market <span>No. of potential customers</span><br>
                                    <select class="select-options" id="id_addressable_market" name="q18">
<option value="Select an option">Select an option</option>
<option value="Less than 10,000">Less than 10,000</option>
<option value="10,000 - 100,000">10,000 - 100,000</option>
<option value="100,000 - 1 million">100,000 - 1 million</option>
<option value="1 million - 10 million">1 million - 10 million</option>
<option value="10 million +">10 million +</option>
</select>
                                   
                                    <div >What percentage of your target population do you predict to acquire?</div><br>
                                    <select class="select-options" id="id_target_population" name="q19">
<option value="Select an option">Select an option</option>
<option value="Less than 15%">Less than 15%</option>
<option value="15 % - 30 %">15 % - 30 %</option>
<option value="30 % - 50%">30 % - 50%</option>
<option value="50 % - 75%">50 % - 75%</option>
<option value="75% - 90%">75% - 90%</option>
</select>
                                   
                        </div>
                        <div style="color:;">
                            <h2>Funding</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-name">What is your current source of funding?</div><br>
                                    <select class="select-options" id="id_funding_source" name="q20">
<option value="Select an option">Select an option</option>
<option value="Bootstrap">Bootstrap</option>
<option value="Friends &amp; Family">Friends &amp; Family</option>
<option value="Seed Funding">Seed Funding</option>
<option value="Series A">Series A</option>
<option value="Funding from Govt">Funding from Govt</option>
<option value="Won a competiton">Won a competiton</option>
<option value="Crowd funding">Crowd funding</option>
</select>
                                    
                                    <div class="field-name">How much funding have you raised so far? (in USD)</div>
                                    <select class="select-options" id="id_funding_raised" name="q21">
<option value="Select an option">Select an option</option>
<option value="&lt;10,000">&lt;10,000</option>
<option value="10,000 -50,000">10,000 -50,000</option>
<option value="50,000 -100,000">50,000 -100,000</option>
<option value="100,001-200,000">100,001-200,000</option>
<option value="200,001-500,000">200,001-500,000</option>
<option value="500,000-1,000,000">500,000-1,000,000</option>
<option value="1,000,001 -5,000,000">1,000,001 -5,000,000</option>
<option value="Above 5,000,000">Above 5,000,000</option>
</select>
                                   
                                            <div >Of the capital raised, how much do you have left?</div>
                                            <select class="select-options" id="id_cap_left" name="q22">
<option value="Select an option">Select an option</option>
<option value="70% to 100%">70% to 100%</option>
<option value="40% to 70%">40% to 70%</option>
<option value="10% to 40%">10% to 40%</option>
<option value="Less than 10%">Less than 10%</option>
<option value="0%">0%</option>
</select>
                                           <div style="color: ;">
                            <h2>Traction</h2>
                            
                                    <div >Do you have a minimum viable product?</div>
                                    <select class="select-options" id="id_mvp" name="q23">
<option value="Select an option">Select an option</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
                                   
                                    <div >If no, when do you predict to have a MVP by?</div>
                                    <select class="select-options" id="id_no_mvp" name="q24">
<option value="Select an option">Select an option</option>
<option value="By end of month">By end of month</option>
<option value="In 3-6 months">In 3-6 months</option>
<option value="In a year">In a year</option>
<option value="More than a year">More than a year</option>
<option value="Not applicable">Not applicable</option>
</select>
                                    
                                    <div >How many unpaid customers do you have?<br/><span>Signed up customers who don't pay for your product</span></div>
                                    <select class="select-options" id="id_unpaid_cusomers" name="q25">
<option value="Select an option">Select an option</option>
<option value="0-10">0-10</option>
<option value="10-100">10-100</option>
<option value="100-1000">100-1000</option>
<option value="1000-5000">1000-5000</option>
<option value="Above 5000">Above 5000</option>
</select>
                                    <span class="err msg">  </span>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-name">How many revenue generating customers do you have?<br/><span>Customers that are paying for the product</span></div>
                                    <select class="select-options" id="id_revenue_cusomers" name="q26">
<option value="Select an option">Select an option</option>
<option value="0-10">0-10</option>
<option value="10-100">10-100</option>
<option value="100-1000">100-1000</option>
<option value="1000-5000">1000-5000</option>
<option value="Above 5000">Above 5000</option>
</select>
                                   
                                            <div >Average revenue per month (in USD)</div>
                                            <select class="select-options" id="id_avg_revenue" name="q27">
<option value="Select an option">Select an option</option>
<option value="0-10">0-10</option>
<option value="10-100">10-100</option>
<option value="100-1000">100-1000</option>
<option value="1000-5000">1000-5000</option>
<option value="Above 5000">Above 5000</option>
</select>
                                           
                                            <div >What is your distribution model? If you have tie ups with distributor, mention in ‘Others’ box.</div>
                                            <select class="select-options" id="id_distribution_model" name="q28">
<option value="Select an option">Select an option</option>
<option value="Mobile &amp; Web based">Mobile &amp; Web based</option>
<option value="Web based">Web based</option>
<option value="Mobile based">Mobile based</option>
<option value="Partnerships with distributors">Partnerships with distributors</option>
</select>
                                            <div style="color:;">
                            <h2>Operating plan</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-name">How much do you estimate to spend on sales and marketing in the next 1 year? <span>In USD</span></div>
                                    <select class="select-options" id="id_sales_budget" name="q29">
<option value="Select an option">Select an option</option>
<option value="100 to 1000">100 to 1000</option>
<option value="1000 to 5000">1000 to 5000</option>
<option value="5,000 to 10,000">5,000 to 10,000</option>
<option value="10,000 to 20,000">10,000 to 20,000</option>
<option value="20,000+">20,000+</option>
</select>
                                    
                                    <div >How many sales people are you predicting to employ in the next one year?</div>
                                    <select class="select-options" id="id_sales_people" name="q30">
<option value="Select an option">Select an option</option>
<option value="None">None</option>
<option value="Less than 3">Less than 3</option>
<option value="3 to 8">3 to 8</option>
<option value="More than 8">More than 8</option>
</select>
                                   
                                    <div class="field-name">How do you plan to scale up?<br/><span>Be realistic to your business &amp; sector</span></div>
                                    <select class="select-options" id="id_scale_up" name="q31">
<option value="Select an option">Select an option</option>
<option value="Open new stores">Open new stores</option>
<option value="Expand to new geographies">Expand to new geographies</option>
<option value="Expand to more verticals">Expand to more verticals</option>
<option value="Strategic partnerships with Corporates">Strategic partnerships with Corporates</option>
<option value="Link up with eco-system players">Link up with eco-system players</option>
<option value="Targeting other audience">Targeting other audience</option>
<option value="Cutting unit cost of product">Cutting unit cost of product</option>
</select>
                                   <div style="color: ;">
                            <h2>Milestones</h2>
                            
                                     <div class="field-name">What are the milestones for your company in the next six months?</div>
                                     <textarea class="c-height" cols="40" id="id_milestones" name="q32" rows="10">
</textarea>
                                     <div>How many customers do you predict to acquire in the next one year?</div>
                                            <select>
<option value="Select an option">Select an option</option>
<option value="0">0</option>
<option value="Less than 100">Less than 100</option>
<option value="100-1000">100-1000</option>
<option value="1000 - 5000">1000 - 5000</option>
<option value="5000 - 10000">5000 - 10000</option>
<option value="10,000 - 50,000">10,000 - 50,000</option>
<option value="50,000 +">50,000 +</option>
</select>
                                            


<div style="color:;">
                            <h2>Others</h2>
                            
                                            <div >Comments</div>
                                            <textarea class="c-height" cols="40" id="id_comments" name="q33" rows="10">
</textarea>
                                            


                        
                            <div ><input type="submit" value="Submit" /></div>
                            <br>
                     </div></div></div></div></div></div></div></div></div></div></div></label></form></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/landing/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
  $('input.badgebox').click(function () {
      var selectVar = $(this).prev().text().toLowerCase();
      var clickd=selectVar.replace(/\s/g,'-');
      $(this).parents('span').toggleClass('active');
       $(this).parents('label').toggleClass('active');
      $('.sub-sectors-container > .sub-sectors.' + clickd).toggleClass('active');

      if($('.sub-sectors').hasClass('active')){
          $('.non-sel').hide();
      }
      else{
          $('.non-sel').show();
      }
  });

});

</script>



<center><br>
<p><i></i> @PVPSIT, VIJAYAWADA, INDIA</p>
      <p><i></i> Phone: +91 8333021838</p>
      <p><i> </i> Email: datta.koneru@gmail.com</p>
      <br>


</center>
</body>
</html>