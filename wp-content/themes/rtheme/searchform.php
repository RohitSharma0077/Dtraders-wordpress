<style type="text/css">
  
  input[type=submit] {
  border-radius:20px;
    color:teal;
    border-color: teal;
    position: absolute;
    margin-left: 20%;
    margin-top: -3%;
    padding: 5px 10px;
}

  input:hover{
    color:coral;
  }

</style>

<!-- serach bar -->
<div style="margin-top: 35px;margin-left: 70px; width:20%">
<form method="get" action="<?php echo home_url('/') ?>">
 
  <input type="text" name="s" placeholder="Search Posts Here" class="form-control" style="border-color: coral;border-radius: 40px;">
  <input type="submit" value="Ask">
</form>
</div>