  <!--  srart_table-srart_table-srart_table-srart_table- -->
<table class="table table-borderless border mt-0 mb-0  border-3 border-primary">
   <thead class="border border-primary border-3 " >
      <tr>
           <th scope="col" class=' input text-nowrap border '>ancien index : <?php echo $AncienI ?></th>
           <th  scope="col"class=' input text-nowrap border border-primary border-3'>nouvel index : <?php echo $NouvelI ?></th>
           <th  scope="col"class=' input text-nowrap border '>consommtion : <?php echo $consomation ?></th>
        </tr>
   </thead> 
</table>
  <!--end_table-end_table-end_table-end_table-end_table -->
  <!--  srart_table-srart_table-srart_table-srart_table- -->
<table class="table mt-0 mb-0 table-borderless border border-top-0 border-bottom-0  border-3 border-primary">
   <tbody>
      <tr class='' style='height:40px;'id=''></tr>
      <tr class='container' style='height:30px;'>
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>
               <td  class='text-nowrap fs-6'style='width:10%;'>مفوتر</td>
               <td  class='text-nowrap fs-6'style='width:10%;'>س.و</td>
               <td  class='text-nowrap fs-6'style='width:10%;'>المبلغ د.إ.ر</td>
               <td  class='text-nowrap fs-6'style='width:10%;'>ض.ق.م</td>
               <td  class=' text-nowrapfs-6'style='width:10%;'>مبلغ الرسوم </td>
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>
      </tr>
      <tr class='' style='height:30px;'>
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>  
               <td style='width:10%;'></td>
               <td  class='text-nowrap fs-6'style='width:10%;'>Facturé</td>
               <td  class='text-nowrap fs-6'style='width:10%;'>P.U</td>
               <td  class='text-nowrap fs-6'style='width:10%;'>Montant HT</td>
               <td  class='text-nowrap fs-6'style='width:10%;'>Taux TVA</td>
               <td  class='text-nowrap fs-6'style='wi
               dth:10%;'>Montant Taxes</td>  
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>                      
      </tr>
      <tbody>  
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
  <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
                <tr  style='height:40px;'>
                  <td class=' text-nowrap float-start'style='margin-left: 20px;margin-right: -20px;' ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONSOMMATION ELECTRICITE</strong></td>
                  <td class=' text-nowrap float-end'><strong>إستھلاك الكھرباء&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
               </tr>                       
         </tbody>
   </table>
    <!--end_table-end_table-end_table-end_table-end_table -->

   <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr class='mf-0' style='height:40px;'>
                  <td class='text-nowrap float-start fs-6  text-black-50 fst-italic'style='width:100%;margin-left: -70px;margin-right: 70px;' colspan="3" >
                  TRANCHE  
                         <?php if($numtranche>=3) 
                              { echo $numtranche;
                              } 
                              else { echo $key+1; }
                        ?>
                    </td>
                  <td class='text-nowrap'style='width:10%;'>
                         <?php if ($consomation <=150 && $consomation >= 101){
                            echo round($tra,2) ;
                        } 
                        else {
                            echo round($consomation,2);
                        } ?>
                 </td>  
                  <td class='text-nowrap border border-top-0  border-bottom-0  border-5 border-primary'style='width:10%;'>
                  <?php echo $tarif ?>
               </td>
                  <td class='text-nowrap 'style='width:5.2%;'>
                  <?php echo round($tranche,2) ?>
               </td>
                  <td class='text-nowrap border border-top-0  border-bottom-0  border-5 border-primary'style='width:10.1%;'>
                  14%
               </td>
                  <td class='text-nowrap'style='width:10.2%;'>
                   <?php echo round($Total_TVA,2) ?>
               </td>
                  <td class='text-nowrap  float-end fs-6 text-black-50  fst-italic'style='width:100%;'colspan="2" >
                   <?php if($numtranche>=3) 
                        { echo $numtranche;
                        } 
                        else { echo $key+1; }
                    ?>
                  الشطر
                </td>
            </tr>
            <tr id="tranche2">
                    <td>tranche 2</td>
                    <td> 
                        <?php echo round($B,2)?>
                    </td>
                    <td> <?php echo $tarif2 ?></td>
                    <td>  
                        <?php echo round($demo,2) ?>
                    </td>
                    <td>14%</td>
                    <td> 
                        <?php echo round($Total_TVA2,2) ?>
                    </td>
                    <td> 2الشطر </td>

                </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 

   <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr  class='mf-0' style='height:40px;'>
                  <td class='text-nowrap float-start'style='width:100%;' colspan="4" ><strong> REDEVANCE FIXE ELECTRICITE</strong></td>
                  <td class='text-nowrap'style='width:10.3%;'>&nbsp;</td>
                  <td class='text-nowrap border border-top-0  border-bottom-0  border-4 border-primary'style='width:10%;'></td>
                  <td class='text-nowrap 'style='width:5.4%;'>
                    <?php echo round($calibre,2) ?>
                  </td>
                  <td class='text-nowrap border border-top-0  border-bottom-0  border-4 border-primary 'style='width:10%;'>14%</td>
                  <td class='text-nowrap 'style='width:10.3%;'>
                    <?php echo round($redevnce,2) ?>
                  </td>
                  <td class='text-nowrap float-start'style='width:100%;'colspan="2"> <strong>إثاوة ثابتة الكھرباءباء</strong></td>
            </tr>
         </tbody>

  <!--end_table-end_table-end_table-end_table-end_table -->
  <!--  srart_table-srart_table-srart_table-srart_table- -->
   </table>
      <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
               <tr class='' style='height:40px;'>
                  <td class='text-nowrap float-start'style='width:100%;'><strong>TAXES POUR LE COMPTE DE L’ETAT</strong></td>
                  <td class='text-nowrap 'style='width:7%;'></td>  
                  <td class='text-nowrap 'style='width:10%;'></td>
                  <td class='text-nowrap 'style='width:10%;'></td>
                  <td class='text-nowrap 'style='width:10%;'></td>
                  <td class='text-nowrap 'style='width:0%;'></td>
                  <td class='text-nowrap float-end'style='width:100%;'><strong>الرسوم المؤداة  لفائد الدولة</strong></td>
               </tr>
         </tbody>
   </table>
   <!--end_table-end_table-end_table-end_table-end_table -->
   
      <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr class='mf-0' style='height:40px;'>
                  <td class='text-nowrap fst-italic text-nowrap float-start fs-6  text-black-50 'style='width:100%;margin-left: 10px;margin-right: 16px;' colspan="6" >TOTAL TVA </td>
                  <td class='text-nowrap'style='width:19%;'></td>  
                  <td class='text-nowrap'style='width:16%;'></td>
                  <td class='text-nowrap'style='width:9%;'></td>
                  <td class='text-nowrap'style='width:8%;'></td>
                  <td class='text-nowrap'style='width:10%;'>
                   <?php echo round($Taxes,2) ?>
               </td>
                  <td class='text-nowrap fst-italic text-nowrap float-end fs-6 text-black-50 'style='width:100%;'colspan="2" > مجموع ض.ق.م </td>
            </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 


 
      <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr class='mf-0' style='height:40px;'>
                  <td class='  float-start fst-italic text-nowrap  fs-6  text-black-50'style='width:100%;' colspan="3" >TIMBRE</td>
                  <td class='text-nowrap'style='width:20%;'></td>  
                  <td class='text-nowrap'style='width:10%;'></td>
                  <td class='text-nowrap'style='width:10%;'></td>
                  <td class='text-nowrap'style='width:10%;'></td>
                  <td class='text-nowrap'style='width:18%;'>0,45</td>
                  <td class='text-nowrap fst-italic text-nowrap float-end fs-6 text-black-50 'style='width:100%;'colspan="2">الطابع</td>
            </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->

       <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr class='mf-0' style='height:50px;'>
                  <td class='text-nowrap float-start'style='width:100%;margin-left: 15px;margin-right: -15px;' colspan="6"><strong>SOUS-TOTAL</strong></td>
                  <td class='text-nowrap'style='width:20%;'></td>  
                  <td class='text-nowrap'style='width:13%;'></td>
                  <td class='text-nowrap'style='width:10%;'><strong>
                         <?php echo round($MontantHT,2)  ?>
                  </strong></td>
                  <td class='text-nowrap'style='width:10%;'></td>
                  <td class='text-nowrap'style='width:10%;'><strong>
                         <?php echo round($sous_total,2) ?>
                  </strong></td>
                  <td class='text-nowrap float-end 'style='width:100%;'colspan="2" > <strong> المجموع الجزي</strong></td>
            </tr>
            <tr class='mf-0' style='height:40px;'> </tr>
            <tr class='mf-0' style='height:40px;'> </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 



       <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 table-striped table-hover  table-borderless border border-top-0    border-3 border-primary">
        </tbody>
             <tr class='mf-0' style='height:40px;'>
                  <td class='text-nowrap  text-nowrap float-start fs-4 ' style='width:100%;' colspan="3"><strong>TOTAL ÉLECTRICITÉ</strong></td>
                  <td class='text-nowrap' style='width:10%;'></td>  
                  <td class='text-nowrap' style='width:10%;'></td>
                  <td class='text-nowrap fs-4' style='width:10%;' ><strong>
                    <?php echo round($total,2) ?>
                  </strong></td>
                  <td class='text-nowrap' style='width:10%;'></td>
                  <td class='text-nowrap' style='width:10%;'></td>
                  <td class='text-nowrap float-end  fs-4' style='width:100%;'colspan="2" > <strong>مجموع الكھرباء </strong></td>
            </tr>
            <tr class='mf-0' style='height:40px;'> </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 



