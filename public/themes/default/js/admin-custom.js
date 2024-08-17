
$(document).ready( function () {
    $('#feesCashTable').DataTable();
    $('#feesPosTable').DataTable();
    $('#feesCardPaymentTable').DataTable();
    $('#feesCardPaymentTable').DataTable();
    $('#feesErrorPaymentTable').DataTable();
    $('#feesBankPaymentTable').DataTable();
    $('#PaymentHistoryTable').DataTable();
    $('#otherPyamentCash').DataTable();
    $('#liveClass').DataTable();
    $('#attendanceTable').DataTable();
    $('#cashBlanceTbl').DataTable();
    $('#mySalaryTbl').DataTable();
    $('#myLeavesTbl').DataTable();
    $('#pendingOrderPickUp').DataTable();
    $('#pendingOrderPickUp').DataTable();
    $('#pendingOrderDeliver').DataTable();
    $('#disOrderTbl').DataTable();
    $('#pendingDisOrder').DataTable();
    $('#addItems').DataTable();
    $('#studentDetailsTable').DataTable();
    $('#inactiveStudents').DataTable();
    $('#scholarshopDetails').DataTable();
    $('#scholarshopAdd').DataTable();
    $('#recAccess').DataTable();
    $('#addRecAccess').DataTable();
    $('#analysingTbl').DataTable();
    $('#pendingCertificateTbl').DataTable();
    $('#approvedCertificateTbl').DataTable();
    $('#subjectwiseVideoTbl').DataTable();
    $('#otherTalenteVideoTbl').DataTable();
    $('#classIssues').DataTable();
    $('#videoRecIssues').DataTable();
    $('#teacherReview').DataTable();
    $('#classVideoAnalysing').DataTable();
    $('#classVideosSummery').DataTable();
    $('#videoTimeTbl').DataTable();
    $('#teacherPayment').DataTable();
    $('#paymentAnalysingTbl').DataTable();
    $('#ourTeacherTbl').DataTable();
    $('#ourTeacherTbl').DataTable();
    $('#scheduleClass').DataTable();
    $('#gradeTimeTbl').DataTable();
    $('#addSubjectTbl').DataTable();
});


const ctx = document.getElementById('salaryCompareChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [   'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY',
        'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER',
        'NOVEMBER', 'DECEMBER'],
    datasets: [{
      label: '# of Votes',
      data: [8500, 10000, 30000, 40000, 50000, 80000,18500, 10300, 30000, 40000, 50000, 80000],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});




const ctx1 = document.getElementById('paymentGraph');

new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER'], // Month names as labels
    datasets: [{
      label: 'Amount', // You can rename this label as needed
      data: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000], // Corresponding data for each month
      borderWidth: 1
    }]
  },
  options: {
    indexAxis: 'y', // Horizontal bar chart
    scales: {
      x: {
        beginAtZero: true
      }
    }
  }
});



$(document).ready(function() {


$('#sendOtpBtn').on('click', function() {
    $('#verifyOTP').removeClass('d-none');
  });

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: false,
    autoplay: true,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,

  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: false,
    nav: false,
    smartSpeed: 200,
    items : 4,
    margin:15,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {

    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);

    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }

    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }

  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });




  $('#add-row-btn').on('click', function() {
    $('#item-container').append(
        '<div class="row align-items-center mt-3">' +
        '<div class="col-7">' +
        '<input type="text" class="form-control fw-500 rounded-3 border-dark font-13" placeholder="Enter Item or Service">' +
        '</div>' +
        '<div class="col-4 text-end">' +
        '<input type="number" class="form-control fw-500 rounded-3 border-dark font-13" placeholder="Enter Amount">' +
        '</div>' +
        '<div class="col-1 text-end">' +
        '<span class="remove-btn">' +
        '<i class="fa-solid fa-circle-xmark text-danger fs-4"></i>' +
        '</span>' +
        '</div>' +
        '</div>'
    );
});

$(document).on('click', '.remove-btn', function() {
    $(this).closest('.row').remove();
});




  });
// scripts.js
document.addEventListener('DOMContentLoaded', function () {
    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const quantityInput = document.getElementById('quantity');

    minusButton.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 0) {
            quantityInput.value = currentValue - 1;
        }
    });

    plusButton.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });
});


document.getElementById('gradeDropdown').addEventListener('change', function () {
  var subjectSec = document.getElementById('subjectSec');
  if (this.value) {
      subjectSec.classList.remove('d-none');
  } else {
      subjectSec.classList.add('d-none');
  }
});









