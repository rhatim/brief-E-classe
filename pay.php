<?php
include 'all.php'
?>
            <div>
              <div class="row mt-4">
                <div class="col-md d-flex justify-content-between">
                    <div class="">
                        <h3>Payment Details</h3>
                    </div>
                    <div class="">
                        <img class="" src="images/scroll.svg" alt="">
                    </div>
                </div>
            </div>  
            <hr>
            <div style="overflow: auto;" class="row">
                <table class="table table-hover table-striped">
                    <thead style="color: rgba(78, 73, 73, 0.211); " class="bg-light ">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amountr</th>
                        <th scope="col">Date</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $payments = [
                      [
                        'name' => 'karthi',
                        'payment_schedule' => 'first',
                        'bill-Number' => '00012223',
                        'amount_paid' => 'dhs_100,000',
                        'balance_amount' => 'dhs_500,000',
                        'date' => '05-jan,_2022',
                      ],
                      [
                        'name' => 'karthi',
                        'payment_schedule' => 'first',
                        'bill-Number' => '00012223',
                        'amount_paid' => 'dhs_100,000',
                        'balance_amount' => 'dhs_500,000',
                        'date' => '05-jan,_2022',
                      ],[
                        'name' => 'karthi',
                        'payment_schedule' => 'first',
                        'bill-Number' => '00012223',
                        'amount_paid' => 'dhs_100,000',
                        'balance_amount' => 'dhs_500,000',
                        'date' => '05-jan,_2022',
                      ],[
                        'name' => 'karthi',
                        'payment_schedule' => 'first',
                        'bill-Number' => '00012233',
                        'amount_paid' => 'dhs_100,000',
                        'balance_amount' => 'dhs_500,000',
                        'date' => '05-jan,_2022',
                      ]
                      ];
                      foreach($payments as $user){
                        echo "<tr>
                          <td>".$user['name']."</td>
                          <td>".$user['payment_schedule']."</td>
                          <td>".$user['bill-Number']."</td>
                          <td>".$user['amount_paid']."</td>
                          <td>".$user['balance_amount']."</td>
                          <td>".$user['date']."</td>
                          <td>".$user['name']."</td>
                          <td><i class='bi bi-eye text-info'></i></td>
                          

                        
                        </tr>";
                      }
                                    
                                ?>
                    </tbody>
                  </table>
                </div>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>