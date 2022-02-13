
<!--  srart_table-srart_table-srart_table-srart_table- -->
<table class="table table-borderless border mt-0 mb-0  border-3 border-primary">
   <thead class="border border-primary border-3 " >
      <tr>
           <th scope="col" class=' text-center   border '>ancien index : <?php echo $AncienI ?></th>
           <th  scope="col"class=' input  border border-primary border-3'>nouvel index : <?php echo $NouvelI ?></th>
           <th  scope="col"class=' input  border '>consommtion : <?php echo $consomation ?></th>
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
               <td  class=' fs-6'style='width:10%;'>مفوتر</td>
               <td  class=' fs-6'style='width:10%;'>س.و</td>
               <td  class=' fs-6'style='width:10%;'>المبلغ د.إ.ر</td>
               <td  class=' fs-6'style='width:10%;'>ض.ق.م</td>
               <td  class=' fs-6'style='width:10%;'>مبلغ الرسوم </td>
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>
      </tr>
      <tr class='' style='height:30px;'>
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>  
               <td style='width:10%;'></td>
               <td  class=' fs-6'style='width:10%;'>Facturé</td>
               <td  class=' fs-6'style='width:10%;'>P.U</td>
               <td  class=' fs-6'style='width:10%;'>Montant HT</td>
               <td  class=' fs-6'style='width:10%;'>Taux TVA</td>
               <td  class=' fs-6'style='width:10%;'>Montant Taxes</td>  
               <td style='width:10%;'></td>
               <td style='width:10%;'></td>                      
      </tr>
      <tbody>  
   </table>
  <!-- end_table-end_table-end_table-end_table-end_table


  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->


  <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
                <tr  style='height:40px;'>
                  <td class='  float-start' ><strong> CONSOMMATION ELECTRICITE</strong></td>
                  <td class='  float-end'><strong>إستھلاك الكھرباء</strong></td>
               </tr>                       
         </tbody>
   </table>
    <!--end_table-end_table-end_table-end_table-end_table -->

   <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
            <tr  style='height:40px;'>

                    <td class='  float-start'>tranche <?php if($numtranche>=3) 
                        { echo $numtranche;
                        } 
                        else { echo $key+1; }
                        ?> &nbsp;
                    </td>
                    <td> 
                        <?php if ($consomation <=150 && $consomation >= 101){
                            echo round($tra,2) ;
                        } 
                        else {
                            echo round($consomation,2);
                        } ?>
                    </td>
                    <td> <?php echo $tarif ?></td>
                    <td> 
                        <?php echo round($tranche,2) ?>
                    </td>
                    <td>14%</td>
                    <td> 
                        <?php echo round($Total_TVA,2) ?>
                    </td>

                    <td class='  float-end'>  
                         <?php if($numtranche>=3) { 
                              echo $numtranche;} 
                             else { echo $key+1; }
                         ?>
                        الشطر </td>

                </tr>


         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 

   <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr  style='height:40px;'>
                  <td class='  float-start'> REDEVANCE FIXE ELECTRICITE</td>
                  <td ></td>
                    <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                  <td>
                    <?php echo round($calibre,2) ?>
                  </td>
                   <td> &nbsp; &nbsp; &nbsp;</td>
                  <td>14%</td>
                <td> &nbsp; &nbsp; &nbsp; </td>
                  <td>
                    <?php echo round($redevnce,2) ?>
                  </td>
                  <td class='  float-end' > إثاوة ثابتة الكھرباءباء</td>
            </tr>
         </tbody>

  <!--end_table-end_table-end_table-end_table-end_table -->
  <!--  srart_table-srart_table-srart_table-srart_table- -->
      <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary" >
        </tbody>
               <tr  style='height:40px;'>
                  <td><strong class='  float-start'>TAXES POUR LE COMPTE DE L’ETAT</strong></td>
                  <td ></td>  
                  <td ></td>
                  <td ></td>
                  <td ></td>
                  <td ><strong class='  float-end'>الرسوم المؤداة  لفائد الدولة</strong></td>
               </tr>
         </tbody>
   </table>
   <!--end_table-end_table-end_table-end_table-end_table -->
   
      <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr  style='height:40px;'>
                  <td class='  float-start'>TOTAL TVA </td>
                  <td>  &nbsp; &nbsp; &nbsp;</td>  
                  <td> &nbsp;  &nbsp;</td>
                  <td> &nbsp; &nbsp;</td>
                  <td> &nbsp; &nbsp;</td>
                  <td>
                   <?php echo round($Taxes,2) ?>
               </td>
                  <td class='  float-end' > مجموع ض.ق.م </td>
            </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 


 
      <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr  style='height:40px;'>
                  <td class='  float-start' >TIMBRE</td>
                  <td ></td>  
                  <td ></td>
                  <td></td>
                  <td ></td>
                  <td >0,45 dh</td>
                  <td class='  float-end'>الطابع</td>
            </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->

       <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table class="table mt-0 mb-0 table-borderless border border-top-0  border-bottom-0  border-3 border-primary">
        </tbody>
             <tr  style='height:40px;'>
                  <td><strong class='  float-start'>SOUS-TOTAL</strong></td>
                  <td ></td>  
                  <td ></td>
                  <td ><strong>
                         <?php echo round($MontantHT,2) . " DH"   ?>
                  </strong></td>
                  <td ></td>
                  <td><strong>
                         <?php echo round($sous_total,2) . " DH"  ?>
                  </strong></td>
                  <td class='  float-end' > <strong> المجموع الجزي</strong></td>
            </tr>
            <tr > </tr>
            <tr > </tr>
         </tbody>
   </table>
  <!--end_table-end_table-end_table-end_table-end_table -->
 

       <!--  srart_table-srart_table-srart_table-srart_table- -->
   <table  class="table popo mt-0 table-striped table-hover  table-borderless border border-top-0   border-3 border-primary">
        </tbody>
             <tr  style='height:40px; font-size:  20px;'>
                  <td ><strong class='  float-start'>TOTAL ÉLECTRICITÉ</strong></td>
                  <td ></td>  
                  <td ></td>
                  <td  ><strong>
                    <?php echo round($total,2) . " DH" ?>
                  </strong></td>
                  <td ></td>
                  <td ></td>
                  <td  > <strong class='  float-end'>مجموع الكھرباء </strong></td>
            </tr>
            <tr id="print" style='height:40px;'> </tr>
         </tbody>
   </table>
             




