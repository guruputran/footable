<?php

return [
    'BIG_LIMIT' => 200,
    'SMALL_LIMIT' => 200,
    'IBOX_LIMIT_BIG' => 200,  
    'IBOX_LIMIT_SMALL' => 200,  
    
    'WITHDRAW_LIMIT' => 200,

/** Actual Magnum payouts
Big
1st Prize RM 2,500.00
2nd Prize RM 1,000.00
3rd Prize RM 500.00
Special Prize RM 180.00
Consolation PrizeRM 60.00
*************
Small
1st Prize RM 3,500.00
2nd Prize RM 2,000.00
3rd Prize RM 1,000.00
*************************/

// $payyout = Payout::latest()->first();
//   $smallFACTOR=$payyout->smallFACTOR;
//   $bigFACTOR=$payyout->bigFACTOR;
//   $iboxFACTOR=$payyout->iboxFACTOR;
//   $spFACTOR = $bigFACTOR/10;
//   $cpFACTOR = $bigFACTOR/20;

    'bigFPpay' => 2500, 'bigSecPpay' => 1000,
    'bigTPpay' => 500, 'smallFPpay' => 3500,
    'smallSecPpay' => 2000, 'smallTPpay' => 1000,
    'bigSPpay' => 180, 'bigCPpay' => 60

];