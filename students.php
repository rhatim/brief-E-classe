<?php
include 'all.php'
?>
<div>
  <div class="row mt-4">
    <div class="col-md d-flex justify-content-between ms-2">
      <div class="">
        <h3>Students List</h3>
      </div>
      <div class="me-3">
        <img class="" src="images/scroll.svg" alt="">
        <button class="btn btn-info text-white ">ADD NEW STUDENT</button>
      </div>
    </div>
  </div>
  <hr>
  <div class="conatiner-fluid mx-auto" >
    <div class="row mx-2" style="overflow-x: auto;">
      <table>
        <thead style="color: rgba(78, 73, 73, 0.211); " class="bg-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone </th>
            <th scope="col">Enroll Number</th>
            <th class="text-nowrap" scope="col">Date of admission</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $students = [
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ],
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ],
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ],
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ],
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ],
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ],
            [
              'name' => 'username',
              'email' => 'user@email.com',
              'phone' => '7305477760',
              'enroll_number' => '1234567305477760',
              'date_of_admission' => '08,-dec, 2021',
              'email' => 'user@email.com',

            ]
          ];

          foreach ($students as $stdnt) {
            echo "<tr>
                               <td> <img src='images/table.svg' alt=></td>
                               <td>" . $stdnt['name'] . "</td>
                               <td>" . $stdnt['email'] . "</td>
                               <td>" . $stdnt['phone'] . "</td>
                               <td>" . $stdnt['enroll_number'] . "</td>
                               <td class='text-nowrap'>" . $stdnt['date_of_admission'] . "</td>
                               
                               <td class='text-nowrap'><i class='bi bi-pencil text-info mx-4'></i></td>

                               <td class='text-nowrap'><i class='bi bi-trash text-info'></i></td>
                          </tr>";
          }


          ?>





        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>