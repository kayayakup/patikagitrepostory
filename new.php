<?php
    $countries = array(
    'AF'=>'AFGHANISTAN',
    'BS'=>'BAHAMAS',
    'KH'=>'CAMBODIA',
    'CM'=>'CAMEROON',
    'KY'=>'CAYMAN ISLANDS',
    'TD'=>'CHAD',
    'CL'=>'CHILE',
    'KM'=>'COMOROS',
    'CG'=>'CONGO',
  );

   ?>

<select name="country" id="country">
  <option value="" selected="selected">Please Choose</option>
  <?php
     foreach($countries as $key => $val){
         $selected = ($val == 'COMOROS') ? 'selected="selected"' : '';
          echo '<option value="'. $val .'" ' . $selected . ' >'. $key .'</option>';
     }
   ?>
</select>