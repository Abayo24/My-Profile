<?php include 'header.php'; ?>
 
 <h1 class="h2">Dashboard</h1>
 <p>This is the homepage of admin interface and can only be seen by the admin.</p>

<!--Widget cards -->
<div class="row my-4">
  <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
      <div class="card">
          <h5 class="card-header">Total Students</h5>
          <div class="card-body">
            <h3 class="card-title">645</h3>
            <p class="card-text">Jan 1 - Apr 30</p>
            <p class="card-text text-success">18.2% increase since last Sem</p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card">
          <h5 class="card-header">Total Instructors</h5>
          <div class="card-body">
            <h3 class="card-title">20</h3>
            <p class="card-text">Jan 1 - Apr 30</p>
            <p class="card-text text-success">4.6% increase since last Sem</p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card">
          <h5 class="card-header">Total Income</h5>
          <div class="card-body">
            <h3 class="card-title">Ksh 70,000,000</h3>
            <p class="card-text">Jan 1 - Apr 30</p>
            <p class="card-text text-danger">2.6% decrease since last Sem</p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card">
          <h5 class="card-header">Total Expenses</h5>
          <div class="card-body">
            <h3 class="card-title">Ksh 2,000,000</h3>
            <p class="card-text">Jan 1 - Apr 30</p>
            <p class="card-text text-success">2.5% increase since last Sem</p>
          </div>
        </div>
  </div>
</div>
<!--Widgets 2-->
<div class="row">
  <div class="col-12 col-xl-8 mb-4 mb-lg-0">
      <div class="card">
          <h5 class="card-header">Latest Students</h5>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Student id</th>
                          <th scope="col">Student Name</th>
                          <th scope="col">Date Join</th>
                          <th scope="col">Parent Name</th>
                          <th scope="col">Contact</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">17371705</th>
                          <td>Benjamin Kamau</td>
                          <td>05/01/2023</td>
                          <td>Paul Kamau</td>
                          <td>0720931904</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">17370540</th>
                          <td>Ann Bosire</td>
                          <td>05/01/2023</td>
                          <td>Joseph Bosire</td>
                          <td>07392657</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">17371706</th>
                          <td>Richard Owino</td>
                          <td>05/01/2023</td>
                          <td>Emma Atieno</td>
                          <td>0754365871</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">17370708</th>
                          <td>Max Kilonzo</td>
                          <td>05/01/2023</td>
                          <td>Elizabeth Wayua</td>
                          <td>0748734987</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">17371709</th>
                          <td>Lennox Gitonga</td>
                          <td>05/01/2023</td>
                          <td>Paul Gitonga</td>
                          <td>0787658678</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">17370710</th>
                          <td>Brenda Nawiri</td>
                          <td>05/01/2023</td>
                          <td>Achieng Abich</td>
                          <td>07845354</td>
                        
                        </tr>
                      </tbody>
                    </table>
              </div>
                <a href="#" class="btn btn-block btn-light" id="button">View all</a>
          </div>
      </div>
  </div>
  
  </div>
  </div>
</div>
<?php include 'footer.php'; ?>