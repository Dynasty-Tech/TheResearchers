<!DOCTYPE html>
<html data-lt-installed="true" lang="en">

<head>
  <title>The Research</title>
  <meta http-equiv="Content-Type" charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="../cdn.jsdelivr.net/gh/lipis/flag-icons%406.6.6/css/flag-icons.min.css" crossorigin="anonymous" rel="preconnect" />
  <link rel="stylesheet" href="css/stellar_left_common_menu_carousel_step_768.min.css" />
</head>

<body>
  <?php include 'common/header.php';?>
  <div class="main-wrapper bigbanner_bg">
    <div class="container-fluid">
      <div class="row align-items-end mt-3">
        <div class="col-md-5 order-md-last">
          <div class="form_wrapper lgray_cologbg">
            <div class="form_wrapper_top">
              <div class="trusted_by_top">
                <p class="blue_text">Trusted By</p>
              </div>
            </div>
            <div class="form_wrapper_bottom">
              <h1 class="text-center">Assignment Help Online @51% Off on Best Assignment Writing Service</h1>
              <h2 class="text-center">Hire Cheap Assignment Helper Online for Top Grades!</h2>
              <div class="form_home_wrap">
                <form id="helpForm" name="helpForm" action="https://www.TheResearchershelp.com/next-step.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="form form_home">
                  <div class="row text-center btn-s">
                    <div class="w-90"><span id="error_missing_filed"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <label for="EnterYourEmailId">Enter Your Email Id &nbsp; <i id="emailid_valid" class=""></i> </label>
                      <input id="emailid" name="email" type="text" value="" placeholder="e.g. your@email.id" class="assignment_form_ip rounded" onfocus="decorateIpField(this.id)" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <label for="Enter Topic">Enter Topic &nbsp; <i id="topic_valid" class=""></i></label>
                      <input id="topic" name="topic" type="text" value="" placeholder="e.g Self & community" class="assignment_form_ip rounded" onfocus="decorateIpField(this.id)" />
                    </div>
                    <div class="col-lg-4">
                      <label for="quantity">No. of Pages / Words<br /></label>
                      <span class="quantity">
                        <a href="#" class="quantity__minus red_cologbg"><span>&#8722;</span></a>
                        <input name="quantity" type="text" class="quantity__input assignment_form_ip" value="1 / 250" aria-label="Quantity" />
                        <a href="#" class="quantity__plus red_cologbg"><span>+</span></a>
                      </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <label for="Choose Assignment Deadline">Choose Assignment Deadline &nbsp; <i id="datepicker_valid" class=""></i></label>
                      <input id="datepicker" name="datepicker" type="text" value="" placeholder="e.g. dd-mm-yyyy" class="assignment_form_ip" readonly="readonly" />
                    </div>
                    <div class="col-4">
                      <label for="Time">Time</label>
                      <select class="assignment_form_ip timepickerdd float-start" id="deadlinetime" name="deadlinetime">
                        <option value="01:00">01:00 AM</option>
                        <option value="02:00">02:00 AM</option>
                        <option value="03:00">03:00 AM</option>
                        <option value="04:00">04:00 AM</option>
                        <option value="05:00">05:00 AM</option>
                        <option value="06:00">06:00 AM</option>
                        <option value="07:00">07:00 AM</option>
                        <option value="08:00">08:00 AM</option>
                        <option value="09:00">09:00 AM</option>
                        <option value="10:00" selected="seleccted">10:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="12:00">12:00 PM</option>
                        <option value="13:00">01:00 PM</option>
                        <option value="14:00">02:00 PM</option>
                        <option value="15:00">03:00 PM</option>
                        <option value="16:00">04:00 PM</option>
                        <option value="17:00">05:00 PM</option>
                        <option value="18:00">06:00 PM</option>
                        <option value="19:00">07:00 PM</option>
                        <option value="20:00">08:00 PM</option>
                        <option value="21:00">09:00 PM</option>
                        <option value="22:00">10:00 PM</option>
                        <option value="23:00">11:00 PM</option>
                        <option value="00:00">12:00 AM</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <label for="description">Enter Assignment Description </label>
                      <textarea id="description" name="description" type="text" value="" placeholder="Write assignment description " class="assignment_form_ip assignment_form_area rounded" onfocus="decorateIpField(this.id)"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <label for="upload" class="hide_by_default">Upload Assignment File</label>
                      <input id="upload" name="upload[]" type="file" value="" placeholder="" class="assignment_form_ip" multiple aria-label="Upload" />
                    </div>
                    <div class="col-4">
                      <input id="submit" name="submit" type="submit" value="Continue" class="input-button-class float-end red_color_link red_cologbg white_text rounded" />
                      <input type="hidden" id="clientDatee" name="clientDate" value="2022-12-30 13:52" />
                      <input type="hidden" id="country_by_ip" name="country_by_ip" value="Pakistan" />
                      <input type="hidden" id="page_url" name="page_url" value="index.html" />
                      <input type="hidden" name="tok" value="0af009894f857d9fe52c11adc7da8eb9355875ba19d5122ce36def777eb55155">
                      <input type="hidden" id="numOfProject" name="numOfProject" value="1" />
                      <input type="hidden" name="numOfword" id="numOfword" value="250" />
                      <input type="hidden" id="user_time" name="user_time" class="user_time" value="10:00">
                      <input type="hidden" id="deadline" name="deadline" type="text" value="" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 order-md-first">
          <div class="row hide_at_mobile">
            
          </div>
          <div class="row align-items-end">
            <div class="col-sm-6">
              <ul class="bottom_ulli">
                <li>100% Plagiarism Free Assignments</li>
                <li>2130+ Native Assignment Helper</li>
                <li>100% Confidential</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="bottom_ulli">
                <li>24x7 Online Assignment Help</li>
                <li>Over 92k+ Satisfied Students & Counting</li>
                <li>Money Back Guarantee</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper top_scroll_wrap">
    <div class="container-fluid">
      <div class="row mt-3 mb-1">
        <div class="col-md-2 np-r">
          <div class="trustd_no_wrap">
            <p class="trustd_no_head">Trusted by <span class="blue_color set_ln_break">92,000+</span> Students of</p>
          </div>
          <div class="vl">&nbsp;</div>
        </div>
        <div class="col-md-10">
          <div class="scroll_box_wrap">
            <div class="scroll_box scroll_box_aus_university">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper lgray_cologbg pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Three Simple Steps to Access Online Assignment Help from Top Experts</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <div class="col-2">
              <img src="images/upload_order.html" alt="Upload Your Order" width="42px" height="42px" loading="lazy" />
            </div>
            <div class="col-10">
              <div class="umg_md_pad_left">
                <p class="step blue_color">Step 1</p>
                <h3 class="step_head">Upload Your Order</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-2 ">
              <p class="text-justify pr-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestiae debitis nam enim nesciunt omnis velit rerum laudantium tenetur eum, facere illo. Neque itaque delectus expedita maxime eligendi, distinctio eaque!</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 pr-3">
          <div class="row">
            <div class="col-2">
              <img src="images/make_payment.html" alt="Make Payment" width="42px" height="42px" loading="lazy" />
            </div>
            <div class="col-10">
              <div class="umg_md_pad_left">
                <p class="step blue_color">Step 2</p>
                <h3 class="step_head">Make Payment</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestiae debitis nam enim nesciunt omnis velit rerum laudantium tenetur eum, facere illo. Neque itaque delectus expedita maxime eligendi, distinctio eaque!</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row">
            <div class="col-2">
              <img src="images/get_solution.html" alt="Get Solution" width="42px" height="42px" loading="lazy" />
            </div>
            <div class="col-10">
              <div class="umg_md_pad_left">
                <p class="step blue_color">Step 3</p>
                <h3 class="step_head">Get Solution</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="text-justify mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi molestiae debitis nam enim nesciunt omnis velit rerum laudantium tenetur eum, facere illo. Neque itaque delectus expedita maxime eligendi, distinctio eaque!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="kub_button_container d-flex justify-content-center">
            <a href="#"  class="expert_link orange_color_link orange_colorbg white_text rounded">Talk to Experts</a>
            <a href="#" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Get Premium Quality Assignment Help and Enhance Your Grades with TheResearchersHelp</h2>
          </div>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quos quod, rerum qui, odit dolorum nostrum eveniet dignissimos excepturi nisi laudantium nam necessitatibus vel, sed eius a nesciunt iste voluptatum.</p>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur deserunt repellendus est molestias saepe fugiat reiciendis explicabo! Iste suscipit tempore sint maiores enim quis dicta a praesentium officia deserunt. Obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, impedit et? Consequatur beatae deserunt accusamus unde! Eaque, veritatis illum alias minus nam eveniet ab assumenda aut ipsa. Quod, amet consequatur!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapperc mb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Our Subject Expertise</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-sm-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-economics-tab" data-toggle="pill" href="#v-pills-economics" role="tab" aria-controls="v-pills-economics" aria-selected="true">Economics<span class="blue_arrow">&nbsp;</span></a>
                <a class="nav-link" id="v-pills-programming-tab" data-toggle="pill" href="#v-pills-programming" role="tab" aria-controls="v-pills-programming" aria-selected="false">Programming<span class="blue_arrow">&nbsp;</span></a>
                <a class="nav-link" id="v-pills-marketing-tab" data-toggle="pill" href="#v-pills-marketing" role="tab" aria-controls="v-pills-marketing" aria-selected="false">Marketing<span class="blue_arrow">&nbsp;</span></a>
                <a class="nav-link" id="v-pills-finance-tab" data-toggle="pill" href="#v-pills-finance" role="tab" aria-controls="v-pills-finance" aria-selected="false">Finance<span class="blue_arrow">&nbsp;</span></a>
                <a class="nav-link" id="v-pills-management-tab" data-toggle="pill" href="#v-pills-management" role="tab" aria-controls="v-pills-management" aria-selected="false">Management<span class="blue_arrow">&nbsp;</span></a>
                <a class="nav-link" id="v-pills-accounting-tab" data-toggle="pill" href="#v-pills-accounting" role="tab" aria-controls="v-pills-accounting" aria-selected="false">Accounting<span class="blue_arrow">&nbsp;</span></a>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-economics" role="tabpanel" aria-labelledby="v-pills-economics-tab">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                    </div>
                    <div class="col-12 col-md-4 hide_at_mobile">
                      <img src="images/economics.html" title="Economics subject expert" alt="Economics subject expert" width="262px" height="282px" class="img-fluid" loading="lazy" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-programming" role="tabpanel" aria-labelledby="v-pills-programming-tab">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                    </div>
                    <div class="col-12 col-md-4 hide_at_mobile">
                      <img src="images/programming.html" title="Programming subject expert" alt="Programming subject expert" width="262px" height="282px" class="img-fluid" loading="lazy" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-marketing" role="tabpanel" aria-labelledby="v-pills-marketing-tab">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                    </div>
                    <div class="col-12 col-md-4 hide_at_mobile">
                      <img src="images/marketing.html" title="Marketing subject expert" alt="Marketing subject expert" width="262px" height="282px" class="img-fluid" loading="lazy" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-finance" role="tabpanel" aria-labelledby="v-pills-finance-tab">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                    </div>
                    <div class="col-12 col-md-4 hide_at_mobile">
                      <img src="images/finance.html" title="Finance subject expert" alt="Finance subject expert" width="262px" height="282px" class="img-fluid" loading="lazy" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-management" role="tabpanel" aria-labelledby="v-pills-management-tab">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                    </div>
                    <div class="col-12 col-md-4 hide_at_mobile">
                      <img src="images/management.html" title="Management subject expert" alt="Management subject expert" width="262px" height="282px" class="img-fluid" loading="lazy" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-accounting" role="tabpanel" aria-labelledby="v-pills-accounting-tab">
                  <div class="row">
                    <div class="col-12 col-md-8">
                      <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
                    </div>
                    <div class="col-12 col-md-4 hide_at_mobile">
                      <img src="images/accounting.html" title="Accounting subject expert" alt="Accounting subject expert" width="262px" height="282px" class="img-fluid" loading="lazy" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12">
          <div class="kub_button_container d-flex justify-content-center">
            <a href="#"  class="expert_link orange_color_link orange_colorbg white_text rounded">Talk to Experts</a>
            <a href="#" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper lgray_cologbg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5">
          <img src="images/know_us_better.html" alt="Know Us Better" width="403px" height="365px" class="img-fluid" loading="lazy" />
        </div>
        <div class="col-sm-7">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Know More About The Researchers</h2>
          </div>
          <div class="kub_div_text">
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
          </div>
          <div class="kub_button_container d-flex justify-content-center">
            <a href="#"  class="expert_link orange_color_link orange_colorbg white_text rounded">Talk to Experts</a>
            <a href="#" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper lgray_cologbg pb-5">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Assignment Help Services - Why Choose Us?</h2>
          </div>
          <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
        </div>
        <div class="col-1"></div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <div class="whyus_blue_block blue_colorbg">
                <p class="whyus_bb_digit">9/10</p>
                <p class="whyus_bb_text white_text">Clients refer us to their friends</p>
              </div>
            </div>
            <div class="col-6">
              <div class="whyus_blue_block blue_colorbg">
                <p class="whyus_bb_digit">2130+</p>
                <p class="whyus_bb_text white_text">Subject matter experts and writers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <div class="whyus_blue_block blue_colorbg">
                <p class="whyus_bb_digit">100%</p>
                <p class="whyus_bb_text white_text">Money back</p>
              </div>
            </div>
            <div class="col-6">
              <div class="whyus_blue_block blue_colorbg">
                <p class="whyus_bb_digit">98%</p>
                <p class="whyus_bb_text white_text">Results - Academic excellence</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm-1">
          <div class="whyus_qabg">
            <img src="images/assignment_quality.html" alt="Assignment Quality" width="88px" height="88px" loading="lazy" />
          </div>
        </div>
        <div class="col-sm-11">
          <div class="cw_quality">
            <h3>Quality Checked</h3>
            <p class="text-justify">There is no compromise in the quality of content that we provide to the students. All the contents by our experts are properly synced, formatted according to the needs of the students and referenced taken from credible sources.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1">
          <div class="whyus_qabg">
            <img src="images/100_customer_satisfaction.html" alt="100% Customer Satisfaction" width="88px" height="88px" loading="lazy" />
          </div>
        </div>
        <div class="col-sm-11">
          <div class="cw_quality">
            <h3>Customer Satisfaction</h3>
            <p class="text-justify">Satisfaction of the customers is of paramount importance to us. To ensure 100% customer satisfaction, we have a free revision facility so that the students can get their solution revised free of cost if any correction is required.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1">
          <div class="whyus_qabg">
            <img src="images/24_7_available.html" alt="24 x 7 Available Writers" width="88px" height="88px" loading="lazy" />
          </div>
        </div>
        <div class="col-sm-11">
          <div class="cw_quality">
            <h3>24*7 Available Experts</h3>
            <p class="text-justify">We have more than ten thousand experts tied up with us to provide the students best assignment writing service at any time. Connect with our team through the chat section, our customer support executives are available to help you.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="kub_button_container d-flex justify-content-center">
            <a href="#"  class="expert_link orange_color_link orange_colorbg white_text rounded">Talk to Experts</a>
            <a href="#" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Top Quality Assignment Help With Value-Added Guarantee</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 mb-4">
          <a class="show_hide_topq">
            <div class="topq_block d-flex align-items-center">
              <div class="text-center">
                <img src="images/timely_delivery.html" alt="Punctual Service" width="73px" height="72px" loading="lazy" />
                <h3>Punctual Service</h3>
              </div>
            </div>
            <div class="topq_block_hover d-flex align-items-center blue_colorbg">
              <div class="text-center">
                <h3 class="white_text">Punctual Service</h3>
                <p class="white_text">Our team comprises a strictly professional urgent assignment help company. All the university assignment help/college assignment help services are provided to the students precisely on time. Our team will deliver online assignment help services precisely on time.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 mb-4">
          <a class="show_hide_topq">
            <div class="topq_block d-flex align-items-center">
              <div class="text-center">
                <img src="images/affordable_price.html" alt="Pocket-Friendly Price" width="73px" height="72px" loading="lazy" />
                <h3>Pocket-Friendly Price</h3>
              </div>
            </div>
            <div class="topq_block_hover d-flex align-items-center blue_colorbg">
              <div class="text-center">
                <h3 class="white_text">Pocket-Friendly Price</h3>
                <p class="white_text">The students of countries like Aus, UK, USA, Singapore, UAE, India, New Zealand, Malaysia, Canada, etc. can access our cheap assignment writing service here at the most affordable assignment helper price.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 mb-4">
          <a class="show_hide_topq">
            <div class="topq_block d-flex align-items-center">
              <div class="text-center">
                <img src="images/no_pagliarism.html" alt="Plagiarism Checker" width="73px" height="72px" loading="lazy" />
                <h3>Plagiarism Checker</h3>
              </div>
            </div>
            <div class="topq_block_hover d-flex align-items-center blue_colorbg">
              <div class="text-center">
                <h3 class="white_text">Plagiarism Checker</h3>
                <p class="white_text">There is no spaced plagiarised content at school, college and university level academic papers. All the contents are checked with Turnitin and delivered to the students to ensure zero tolerance in our need assignment help service.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 mb-4">
          <a class="show_hide_topq">
            <div class="topq_block d-flex align-items-center">
              <div class="text-center">
                <img src="images/free_revision.html" alt="Unlimited Revision" width="73px" height="72px" loading="lazy" />
                <h3>Unlimited Revision</h3>
              </div>
            </div>
            <div class="topq_block_hover d-flex align-items-center blue_colorbg">
              <div class="text-center">
                <h3 class="white_text">Unlimited Revision</h3>
                <p class="white_text">If any student is not satisfied with our cheap assignment help online solution, the students have no worries. Best writers revise the solution completely free of cost according to the feedback of the students.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 mb-4">
          <a class="show_hide_topq">
            <div class="topq_block d-flex align-items-center">
              <div class="text-center">
                <img src="images/authentic_content.html" alt="Error Free Solution" width="73px" height="72px" loading="lazy" />
                <h3>Error Free Solution</h3>
              </div>
            </div>
            <div class="topq_block_hover d-flex align-items-center blue_colorbg">
              <div class="text-center">
                <h3 class="white_text">Error Free Solution</h3>
                <p class="white_text">To ensure 100% error-free university assignment help/college assignment help service, our proof-readers remove all the possible errors – spelling and grammatical. Completely error-free academic papers are the promise of its best assignment writing service.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 mb-4">
          <a class="show_hide_topq">
            <div class="topq_block d-flex align-items-center">
              <div class="text-center">
                <img src="images/phd_experts.html" alt="Consult with the Expert" width="73px" height="72px" loading="lazy" />
                <h3>Consult with the Expert</h3>
              </div>
            </div>
            <div class="topq_block_hover d-flex align-items-center blue_colorbg">
              <div class="text-center">
                <h3 class="white_text">Consult with the Expert</h3>
                <p class="white_text">Our team allows the students to chat and talk directly with the university assignment help experts. The students are free to request a chat with our assignment writers to provide proper instruction.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper lgray_cologbg mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Our Multidimensional Online Assignment Help Services</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="htab_links">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="tab" aria-controls="pills-assignment" aria-selected="true">
                <a class="nav-link active" id="pills-assignment-tab" data-toggle="pill" href="#pills-assignment">Assignment</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-essay" aria-selected="false">
                <a class="nav-link" id="pills-essay-tab" data-toggle="pill" href="#pills-essay">Essay</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-programminghelp" aria-selected="false">
                <a class="nav-link" id="pills-programminghelp-tab" data-toggle="pill" href="#pills-programminghelp">Programming Help</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-researchpaperhelp" aria-selected="false">
                <a class="nav-link" id="pills-researchpaperhelp-tab" data-toggle="pill" href="#pills-researchpaperhelp">Research Paper Help</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-cdrreportwriting" aria-selected="false">
                <a class="nav-link" id="pills-cdrreportwriting-tab" data-toggle="pill" href="#pills-cdrreportwriting">CDR Report Writing</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-resumewriting" aria-selected="false">
                <a class="nav-link" id="pills-resumewriting-tab" data-toggle="pill" href="#pills-resumewriting">Resume Writing</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-termpaper" aria-selected="false">
                <a class="nav-link" id="pills-termpaper-tab" data-toggle="pill" href="#pills-termpaper">Term Paper</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-coursework" aria-selected="false">
                <a class="nav-link" id="pills-coursework-tab" data-toggle="pill" href="#pills-coursework">Coursework</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-casestudy" aria-selected="false">
                <a class="nav-link" id="pills-casestudy-tab" data-toggle="pill" href="#pills-casestudy">Case Study</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-dissertation" aria-selected="false">
                <a class="nav-link" id="pills-dissertation-tab" data-toggle="pill" href="#pills-dissertation">Dissertation</a>
              </li>
              <li class="nav-item" role="tab" aria-controls="pills-homework" aria-selected="false">
                <a class="nav-link" id="pills-homework-tab" data-toggle="pill" href="#pills-homework">Homework</a>
              </li>
            </ul>
          </div>
          <div class="tab-content htab_content text-center pt-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-assignment" role="tabpanel" aria-labelledby="pills-assignment-tab">
              <h3>Assignment</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-essay" role="tabpanel" aria-labelledby="pills-essay-tab">
              <h3>Essay</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-programminghelp" role="tabpanel" aria-labelledby="pills-programminghelp-tab">
              <h3>Programming Help</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-researchpaperhelp" role="tabpanel" aria-labelledby="pills-researchpaperhelp-tab">
              <h3>Research Paper Help</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-cdrreportwriting" role="tabpanel" aria-labelledby="pills-cdrreportwriting-tab">
              <h3>CDR Report Writing</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-resumewriting" role="tabpanel" aria-labelledby="pills-resumewriting-tab">
              <h3>Resume Writing</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-termpaper" role="tabpanel" aria-labelledby="pills-termpaper-tab">
              <h3>Term Paper</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-coursework" role="tabpanel" aria-labelledby="pills-coursework-tab">
              <h3>Coursework</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-casestudy" role="tabpanel" aria-labelledby="pills-casestudy-tab">
              <h3>Case Study</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-dissertation" role="tabpanel" aria-labelledby="pills-dissertation-tab">
              <h3>Dissertation</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
            <div class="tab-pane fade" id="pills-homework" role="tabpanel" aria-labelledby="pills-homework-tab">
              <h3>Homework</h3>
              <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ex alias beatae eaque iste, totam soluta aut recusandae exercitationem iure est libero praesentium amet doloremque saepe rem cum similique laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea enim sunt explicabo architecto, possimus laboriosam fugit eius! Iusto esse earum quod obcaecati, molestias iure maiores, eveniet, explicabo expedita ipsa tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ducimus incidunt odit corporis rerum omnis quos, hic harum ab assumenda nobis ut eligendi tenetur? Est veniam hic consequuntur omnis esse.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 pt-4 pb-5">
          <div class="kub_button_container d-flex justify-content-center">
            <a href="#" class="expert_link orange_color_link orange_colorbg white_text rounded">Talk to Experts</a>
            <a href="#" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Recently Added Reviews</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="rareview_top_block">
            <div class="rareview_image"><img src="images/inverted_comma.html" alt="Geography" width="34px" height="26px" loading="lazy" /></div>
            <div class="rareview_head">
              <h3 class="expert_name">Geography</h3>
              <div class="expert_star">
                <p class="expert_star_value blue_color"><span class="expert_star_text">4.9&nbsp;&nbsp;</span><span class="expert_star_icon five_star">&nbsp;</span></p>
              </div>
              <p class="rareview_country">Australia</p>
            </div>
          </div>
          <div class="rareview_middle_block">
            <p class="rareview_text">First and foremost, Thank you! For all your help in my geography assignment, your help helped me to score the best in the class. I will visit again as soon as I am assigned with the next assignment.</p>
          </div>
          <div class="rareview_bottom_block">
            <div class="rareview_image_bottom">
              <img src="images/inverted_comma_end.html" alt="Ross Williams" width="34px" height="26px" loading="lazy" />
            </div>
            <div class="rareview_text_bottom">
              <p><b>Kate Were</b><br />Cust. ID #54867</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rareview_top_block">
            <div class="rareview_image"><img src="images/inverted_comma.html" alt="History" width="34px" height="26px" loading="lazy" /></div>
            <div class="rareview_head">
              <h3 class="expert_name">History</h3>
              <div class="expert_star">
                <p class="expert_star_value blue_color"><span class="expert_star_text">4.9&nbsp;&nbsp;</span><span class="expert_star_icon five_star">&nbsp;</span></p>
              </div>
              <p class="rareview_country">South Australia</p>
            </div>
          </div>
          <div class="rareview_middle_block">
            <p class="rareview_text">From my Graduation days to my current PhD days, I have visited this site Theresearchers.co.uk, for my projects whether dissertation or course work, these experts have helped me a lot in my subject History.</p>
          </div>
          <div class="rareview_bottom_block">
            <div class="rareview_image_bottom">
              <img src="images/inverted_comma_end.html" alt="Ross Williams" width="34px" height="26px" loading="lazy" />
            </div>
            <div class="rareview_text_bottom">
              <p><b>Tyson Bayly</b><br />Cust. ID #44719</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rareview_top_block">
            <div class="rareview_image"><img src="images/inverted_comma.html" alt="Law" width="34px" height="26px" loading="lazy" /></div>
            <div class="rareview_head">
              <h3 class="expert_name">Law</h3>
              <div class="expert_star">
                <p class="expert_star_value blue_color"><span class="expert_star_text">4.9&nbsp;&nbsp;</span><span class="expert_star_icon five_star">&nbsp;</span></p>
              </div>
              <p class="rareview_country">Western Australia</p>
            </div>
          </div>
          <div class="rareview_middle_block">
            <p class="rareview_text">Here you will have a customised programming assignment solution from the most accomplished experts of your country and A+ grades in the examination are given when you are accessing assignment help solutions here at Theresearchers.co.uk</p>
          </div>
          <div class="rareview_bottom_block">
            <div class="rareview_image_bottom">
              <img src="images/inverted_comma_end.html" alt="Ross Williams" width="34px" height="26px" loading="lazy" />
            </div>
            <div class="rareview_text_bottom">
              <p><b>Jake Iredale</b><br />Cust. ID #54913</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 pt-5 pb-5">
          <div class="kub_button_container d-flex justify-content-center">
            <a href="#"  class="expert_link orange_color_link orange_colorbg white_text rounded">Talk to Experts</a>
            <a href="#" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-wrapper lgray_cologbg mt-3 pb-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blue_bottom_line_wrap d-flex justify-content-center">
            <h2 class="blue_bottom_line">Frequently Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="accordion" id="accordionLeft">
            <div class="card">
              <div class="card-header" id="heading1">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    What is Academic Study Help? <span class="plus_minus_accordion">&nbsp;</span>
                  </button>
                </h3>
              </div>
              <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">Students often find their academic studies tough in terms of difficulty, lack of time or shortage of authentic resources. Here comes the importance of academic papers where a group of experts help students to prepare for their academic studies with complete guidance.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading2">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    What are The Elements of An Academic Paper?
                  </button>
                </h3>
              </div>
              <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">A nicely crafted solution is always appreciated. Some basic guidelines are always provided by the university to follow. While preparing a paper that should be strictly followed. Normally, the elements are some pointers which are cumulatively called a basic structure.</p>
                  <p class="text-justify">These elements are:</p>
                  <div class="yellow_dot_ulli">
                    <ul>
                      <li>Cover page</li>
                      <li>Table of content</li>
                      <li>Introduction</li>
                      <li>Main body</li>
                      <li>Conclusion</li>
                      <li>References</li>
                    </ul>
                  </div>
                  <p class="text-justify">In-text citation and appendix are also some key elements depending on the requirement of the particular paper.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading3">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    How Can You Make an Academic Paper?
                  </button>
                </h3>
              </div>
              <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">Academic paper is now-a-days is a well-required means for students to acquire proper guidance and knowledge for their education. The key aspect of making a top-class academic paper is to follow each and every guideline given in the question file. Paper writing does exactly the same.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading4">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    How Can I Get Study Papers Done Fast?
                  </button>
                </h3>
              </div>
              <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">This is no big deal at all. Our experts are proficient enough to guide you all the way possible even if the shortest possible time. Along with that 24*7 live chat support and on-call assistance are there to help each and every student even if in the shortest possible time.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading5">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    How can I avail Paper Help?
                  </button>
                </h3>
              </div>
              <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">Availing the best study helper has never been this easy. Best experts are just 3 clicks away. Visit TheResearchersHelp and fill a simple form, pay partial half of the quoted amount to start the work and book your service right now. Rest is done by the professional team within the given time period with 100% precision.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading6">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    Are there any Offers or Discounts Available on Study papers?
                  </button>
                </h3>
              </div>
              <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">Students’ satisfaction is all that team TheResearchersHelp cares about the most. Keeping students’ financial situation in mind we try to run effective offers throughout the year. Currently, a flat 51% discount is going on keeping the Pandemic in consideration. An academic paper is always by your side for any kind of academic related help.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading7">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    Who provides the best online study papers?
                  </button>
                </h3>
              </div>
              <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionLeft">
                <div class="card-body">
                  <p class="text-justify">There are hundreds of platforms online that claim themselves as the best. There are some parameters like punctuality, work quality, communication, plagiarism, pocket-friendliness, and post-submission support that need to be checked before mentioning someone the best. At TheResearchersHelp all these parameters are strictly followed.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="accordion" id="accordionRight">
            <div class="card">
              <div class="card-header" id="heading50">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                    Can your writers meet the tough deadlines?
                  </button>
                </h3>
              </div>
              <div id="collapse50" class="collapse" aria-labelledby="heading50" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">Yes, definitely. That is our top-most priority because we understand the cost of a single minute when you have a close deadline. Submission of academic studies before the given deadline is something that comes under our academic help features and it is followed without any compromise.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading51">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                    Which subject Study help do you provide?
                  </button>
                </h3>
              </div>
              <div id="collapse51" class="collapse" aria-labelledby="heading51" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">All the subjects that are catered in the universities are dealt with utmost care at TheResearchersHelp. Starting from Management to Accounting, Engineering, Healthcare, Humanities, Medical, CDR and many other subjects are catered under our service assignment writing help Australia.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading52">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                    Why is assignment help important?
                  </button>
                </h3>
              </div>
              <div id="collapse52" class="collapse" aria-labelledby="heading52" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">Study help is important because through a cheap assignment writing service you can come across top qualified professionals who not only guide you in preparing a quality work but also help you acquire knowledge on the particular subject.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading53">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                    How fast can you write my essay?
                  </button>
                </h3>
              </div>
              <div id="collapse53" class="collapse" aria-labelledby="heading53" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">It depends on the requirement. Normally, we take 6 hours at least to deliver any kind of writing. In special cases, it can be done in a shorter time period. Get your instant assignments at the cheapest assignment helper price.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading54">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                    Do I need to pay for an academic solution before or after?
                  </button>
                </h3>
              </div>
              <div id="collapse54" class="collapse" aria-labelledby="heading54" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">There are multiple payment options. Students can pay the full amount at the beginning of the work. They can pay it in 2 different parts, one- at the starting of the work and the rest when the work is completed. For more than 5000 words academic studies payment can be done in multiple parts.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading55">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                    How can I hire someone to write my assignment for me?
                  </button>
                </h3>
              </div>
              <div id="collapse55" class="collapse" aria-labelledby="heading55" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">The simplest way to hire a professional is to visit TheResearchersHelp and click on order now. Our live chat support is 24/7 operational for your assistance.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading56">
                <h3 class="mb-0 accord_head">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                    Is your write my assignment service confidential?
                  </button>
                </h3>
              </div>
              <div id="collapse56" class="collapse" aria-labelledby="heading56" data-parent="#accordionRight">
                <div class="card-body">
                  <p class="text-justify">It is 100% confidential. Students’ info and experts’ info is completely secured and no 3rd part has any access to that.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper lgray_cologbg mt-4 pt-4 pb-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-12 hide_at_mobile">
              <h3 class="letter_trust_payment">Subscribe to Our Newsletter</h3>
              <form id="subscribe" name="subscribe" onsubmit="return subscription_form_submit('subscribe','email/subscribe_email.html','')" action="#" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="form subscribe_form">
                <div class="input-group">
                  <input id="Email" name="Email" type="text" value="" placeholder="Your email id" class="form-control newsletter_mail_ip" onfocus="decorateIpField(this.id)" />
                  <input id="subscribe-submit" name="subscribe-submit" type="submit" value="Submit" class="red_color_link red_cologbg white_text subscribe_submit" />
                  <input type="hidden" name="subscriber_page_url" value="index.html" />
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-6">
              <div class="float-end float-end-tb">
                <h3 class="letter_trust_payment">Trusted By</h3>
                <div class="align_center"><img src="images/trusted_by_bottm.html" alt="Trusted By" width="278px" height="32px" class="footer_image_st" loading="lazy" /></div>
              </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0 mb-3 mb-md-0">
              <div class="float-md-end">
                <h3 class="letter_trust_payment">100% Secure Payment</h3>
                <div class="align_center"><img src="images/secure_payment.html" alt="100% Secure Payment" width="204px" height="32px" class="footer_image_st" loading="lazy" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper dealblue_bg pt-2 pt-md-4" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <img src="images/mega_deal.html" alt="Mega deal" width="203px" height="101px" loading="lazy" class="img-fluid" />
        </div>
        <div class="col-5">
          <p class="fifty_off text-white">Upto <span>51% OFF</span></p>
          <p class="first_assignment text-white">on your first assignment</p>
        </div>
        <div class="col-4">
          <div class="kub_button_container d-flex justify-content-center float-end mt-0 mt-md-5">
            <a href="#" class="expert_link orange_color_link orange_colorbg white_text hide_at_mobile rounded">Talk to Experts</a>
            <a href="order-now/index.html" class="order_link red_color_link red_cologbg white_text rounded">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'common/footer.php';?>
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" referrerpolicy="no-referrer" rel="preconnect" />
  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/all.stellar_leftSub_common_helpForm_orderNowForm.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>