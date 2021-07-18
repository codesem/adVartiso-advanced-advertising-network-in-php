<?php

 //general
 messages('S_REQUIRED','info','is required!');
 messages('REQUIRED','danger','Fill the required fields.');
 messages('SOME_WRONG','danger','Somthing Wrong! Please Try again.');
 messages('RECAPTCHA','danger','Captcha Wrong! Please Try again.');
 messages('SMALL_BALANCE','danger',"You don't have enought balance.");
 messages('LESS_THEN','danger','Less Then Minimum to order');
 messages('AMOUNT_D_SMALL','danger',' Munimumm Amount is '.do_amount(do_config(2)));
 messages('CREDITED','success','Your account balance was credited.');

 //support
 messages('CONTACT_SENT','success','Your message was sent!');
 messages('TICKETREPLY','success','Your reply was sent!');

 //forgot password
 messages('USERNAME_NOTFOUND','danger','Username not found');
 messages('FORGOT_CONFIRMATION_SENT','success',"We've sent you a confirmation e-mail.");

 //publishers
 messages('WEB_ADDED','success','Your Website Added Successfully');
 messages('WEB_DELETED','success','Your Website Deleted Successfully');
 messages('WEB_EXIST','danger','Website already exist.');
 messages('WEB_INACTIVE','danger','Inactive website.');
 messages('WITH_SCHEDULED','success','Your withdraw request was scheduled.');

 //advertisers
 messages('TEMP_DEACTIVATED','success','Template Deactivated Successfully');
 messages('TEMP_ACTIVATED','success','Template Activated Successfully');
 messages('TEMP_DELETED','success','Template Deleted Successfully');
 messages('CAMP_UPDATED','success','Campaign Updated Successfully');
 messages('CAMP_DEACTIVATED','success','Campaign Deactivated Successfully');
 messages('CAMP_ACTIVATED','success','Campaign Activated Successfully');
 messages('CAMP_DELETED','success','Campaign Deleted Successfully');
 
 //settings
 messages('PERSONAL','success','Your personal information was updated.');
 messages('PASS_CHANGED','success','Your password was changed.');
 messages('PASS_NOTMATCH','danger','Passwords Not Match.');
 messages('PASS_UNCHANGE','danger','Entered Current Password Is Wrong.');

 //login
 messages('INVALID','danger','Username/Password Wrong!');
 messages('BANNED','danger','Account Banned!');
 messages('EXPRESS','success','Please Login First.');
 messages('ACTIVATED','success','Account Activated! Please Login First.');
 messages('EXPIRED','warning','Your Session Expired!');

 //register
 messages('IP_BLOCKED','danger','Your IP was blocked.');
 messages('PASSWORDS','danger','Passwords do not match.');
 messages('EXIST','danger','Email already exist. Please choose another one.');
 messages('WHITESPACE','danger',"Make sure your username doesn't contain whitespace");
 messages('REPEAT','danger','Please choose another username.');