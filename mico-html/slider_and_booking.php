
<section class="slider_section">
  <div class="dot_design">
    <img src="images/dots.png" alt="">
  </div>
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="play_btn">
                  <button>
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </button>
                </div>
                <h1>
                  Mico <br>
                  <span>Hospital</span>
                </h1>
                <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
                <a href="">Contact Us</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/slider-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="play_btn">
                  <button>
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </button>
                </div>
                <h1>
                  Mico <br>
                  <span>Hospital</span>
                </h1>
                <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
                <a href="">Contact Us</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/slider-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="play_btn">
                  <button>
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </button>
                </div>
                <h1>
                  Mico <br>
                  <span>Hospital</span>
                </h1>
                <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
                <a href="">Contact Us</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/slider-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <img src="images/prev.png" alt="">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <img src="images/next.png" alt="">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<!-- book section -->
<section class="book_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col">
        <form method="POST" action="process_appointment.php">
          <h4>
            BOOK <span>APPOINTMENT</span>
          </h4>
          <div class="form-row">
            <div class="form-group col-lg-4">
              <label for="inputPatientName">Patient Name</label>
              <input type="text" name="patient_name" class="form-control" id="inputPatientName" placeholder="">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDoctorName">Doctor's Name</label>
              <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                <option value="Gigio">Gigio</option>
                <option value="Tormalina">Tormalina</option>
                <option value="Alice">Alice</option>
              </select>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDepartmentName">Department's Name</label>
              <select name="department_name" class="form-control wide" id="inputDepartmentName">
                <option value="Chiro">Chiro</option>
                <option value="Cardio">Cardio</option>
                <option value="Emergency">Emergency</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-4">
              <label for="inputPhone">Phone Number</label>
              <input type="number" name="phone_number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputSymptoms">Symptoms</label>
              <input type="text" name="symptoms" class="form-control" id="inputSymptoms" placeholder="">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDate">Choose Date</label>
              <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                <input type="text" name="appointment_date" class="form-control" readonly>
                <span class="input-group-addon date_icon">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" class="btn">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>