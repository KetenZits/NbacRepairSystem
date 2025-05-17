@extends('dashboardlayout')
@section('title')
    Dashboard
@endsection
{{-- aos --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- aos --}}
{{-- calendar link --}}
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet' />
{{-- calendar link --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<div class="container mx-auto px-5">
    <div class="navbar bg-base-100 shadow-md rounded-full text-blue-400">
        <div class="navbar-start">
          <a class="btn btn-ghost rounded-full text-xl ml-5 hover:btn-info hover:text-white">Dashboard</a>
        </div>
        <div class="navbar-center">
          
        </div>
        <div class="navbar-end">
          <button class="btn btn-ghost btn-circle hover:btn-info hover:text-white" onclick="my_modal_3.showModal()">
            <div class="indicator">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /> </svg>
              @if($unreadCount > 0)
                <span class="badge badge-xs badge-error indicator-item text-white">
                    {{ $unreadCount }}
                </span>
              @endif
            </div>
          </button>
        </div>
      </div>

      <dialog id="my_modal_3" class="modal">
        <div class="modal-box border-l-4 border-blue-500 max-w-[36rem]">
          <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
          </form>
          <h3 class="text-lg font-bold">Notification Box!</h3>
          @if(isset($notifications1))
          <ul class="mt-5">
            @foreach ($notifications1 as $notification)
            <form action="{{ route('notifications.read', $notification->id) }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left">
                    <div class="p-4 mb-2 rounded border 
                        @if (!$notification->is_read)
                            bg-blue-100 border-blue-500
                        @else
                            bg-white border-gray-300
                        @endif">
                        <p>{{ $notification->message }}</p>
                        <span class="text-xs text-gray-500">{{ $notification->created_at->diffForHumans() }}</span>
                    </div>
                </button>
            </form>
        @endforeach
          </ul>
          @endif
          <div>
            <form action="{{ route('mark-all-read') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-info text-white">Read All</button>
            </form>
          </div>
        </div>
      </dialog>

      <div class="flex flex-col items-center justify-between my-10 lg:flex-col lg:flex-wrap lg:justify-around">
      <div class="flex">
        <div class="w-85 xl:w-225 2xl:w-285 md:w-150 sm:w-120 bg-slate-600 shadow-md rounded-2xl my-2">
            <canvas id="myChart1" class="px-3 py-5"></canvas>
        </div>
      </div>
      <div class="flex">
        <div class="w-85 xl:w-225 2xl:w-285 md:w-150 sm:w-120 bg-slate-600 shadow-md rounded-2xl my-2">
            <canvas id="myChart2" class="px-3 py-5"></canvas>
        </div>
      </div>
      </div>  
    </div>

    <div class="w-full flex justify-center items-center my-5">
      <div class="stats w-full  stats-vertical lg:stats-horizontal shadow-md">
      <div class="stat">
        <div class="stat-figure text-primary text-3xl">
          <i class="fas fa-tools"></i>
        </div>
        <div class="stat-title text-2xl">ส่งคำขอการซ่อมรายสัปดาห์</div>
        <div class="stat-value text-primary">{{ $weekcount }}</div>
        <div class="stat-desc text-primary">
        <div class="inline-grid *:[grid-area:1/1] mr-2">
          <div class="status status-primary animate-ping"></div>
          <div class="status status-primary"></div>
        </div>
        จันทร์ - อาทิตย์
      </div>
      </div>
    
      <div class="stat">
        <div class="stat-figure text-secondary text-3xl">
          <i class="fas fa-tools"></i>
        </div>
        <div class="stat-title text-2xl">ส่งคำขอการซ่อมรายเดือน</div>
        <div class="stat-value text-secondary">{{ $monthcount }}</div>
        <div class="stat-desc text-secondary">
          <div class="inline-grid *:[grid-area:1/1] mr-2">
            <div class="status status-secondary animate-ping"></div>
            <div class="status status-secondary"></div>
          </div>
          ต้นเดือน - สิ้นเดือน
        </div>
      </div>
    
      <div class="stat">
        <div class="stat-figure text-info text-3xl">
          <i class="fas fa-tools"></i>
        </div>
        <div class="stat-title text-2xl">ส่งคำขอการซ่อมรายปี</div>
        <div class="stat-value text-info">{{ $yearcount }}</div>
        <div class="stat-desc text-info">
          <div class="inline-grid *:[grid-area:1/1] mr-2">
            <div class="status status-info animate-ping"></div>
            <div class="status status-info"></div>
          </div>
          ต้นปี - สิ้นปี
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-col gap-5 justify-around lg:flex-col xl:flex-row ">

    <ul class="list bg-base-100 rounded-box shadow-md w-full"> 
      <li class="list-row tracking-wide">Notification Task</li>
      <div class="">
        @forEach($notifications2 as $notification)
      <li class="list-row items-center hover:bg-base-200 transition cursor-pointer">
        <div><i class="fas fa-tools text-info text-3xl"></i></div>
        <div>
          {{ $notification->message }}
          <div class="text-xs uppercase font-semibold opacity-60">{{ $notification->created_at->diffForHumans() }}</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <a href="/service-view" target="_blank"><svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg></a>
        </button>
      </li>
      @endforeach
    </div>
    </ul>

    <ul class="list bg-base-100 rounded-box shadow-md w-full"> 
      <li class="list-row tracking-wide">Calendar Date</li>
      <li class="list-row h-full items-center hover:bg-base-200 transition cursor-pointer flex justify-center">
        <div id='calendar' class="max-h-[650px] overflow-auto"></div>
      </li>
    </ul>

  </div>
  @endsection
  @push('scripts')
<!-- Import aos JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Import FullCalendar JS -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
<!-- Import Thai locale if needed -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/th.global.min.js'></script>
  <!--  Chart.js  -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--  Chart.js  -->
<script>
  //graph script
  document.addEventListener("DOMContentLoaded", function () {
  // 1. ตรวจสอบว่ามีการโหลด Chart.js หรือไม่
  if (typeof Chart === 'undefined') {
    console.error("Chart.js ไม่ถูกโหลด โปรดตรวจสอบว่าได้เพิ่ม script ของ Chart.js แล้ว");
    return;
  }

  // 2. โค้ดสำหรับการโหลดข้อมูลกราฟ
  async function loadChartData() {
  try {
    const res = await fetch("/booking-chart-data");
    const data = await res.json();
    
    console.log("ข้อมูลที่ได้รับจาก API:", data);

    // แปลงวันในสัปดาห์ (1=อาทิตย์, 2=จันทร์, ... 7=เสาร์)
    const days = ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์"];
    const weeklyLabels = data.weekly.map(item => days[item.day - 1]);
    const weeklyData = data.weekly.map(item => item.total);

    // แปลงเดือน
    const months = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
    const monthlyLabels = data.monthly.map(item => months[item.month - 1]);
    const monthlyData = data.monthly.map(item => item.total);
    
    console.log("ข้อมูลรายสัปดาห์:", weeklyLabels, weeklyData);
    console.log("ข้อมูลรายเดือน:", monthlyLabels, monthlyData);

    // ตรวจสอบว่า canvas elements มีอยู่หรือไม่
    const canvas1 = document.getElementById("myChart1");
    const canvas2 = document.getElementById("myChart2");

    // กำหนดสีสำหรับแต่ละวัน
    const weeklyColors = {
      backgroundColor: [
        'rgba(255, 99, 132, 0.4)',   // สีสำหรับวันอาทิตย์ - สีแดง
        'rgba(255, 159, 64, 0.4)',   // สีสำหรับวันจันทร์ - สีส้ม
        'rgba(255, 205, 86, 0.4)',   // สีสำหรับวันอังคาร - สีเหลือง
        'rgba(75, 192, 192, 0.4)',   // สีสำหรับวันพุธ - สีเขียวอ่อน
        'rgba(54, 162, 235, 0.4)',   // สีสำหรับวันพฤหัส - สีฟ้า
        'rgba(153, 102, 255, 0.4)',  // สีสำหรับวันศุกร์ - สีม่วง
        'rgba(201, 203, 207, 0.4)'   // สีสำหรับวันเสาร์ - สีเทา
      ],
      borderColor: [
        'rgb(255, 99, 132)',     // สีสำหรับวันอาทิตย์ - สีแดง
        'rgb(255, 159, 64)',     // สีสำหรับวันจันทร์ - สีส้ม
        'rgb(255, 205, 86)',     // สีสำหรับวันอังคาร - สีเหลือง
        'rgb(75, 192, 192)',     // สีสำหรับวันพุธ - สีเขียวอ่อน
        'rgb(54, 162, 235)',     // สีสำหรับวันพฤหัส - สีฟ้า
        'rgb(153, 102, 255)',    // สีสำหรับวันศุกร์ - สีม่วง
        'rgb(201, 203, 207)'     // สีสำหรับวันเสาร์ - สีเทา
      ]
    };

    // กำหนดสีสำหรับแต่ละเดือน
    const monthlyColors = {
      backgroundColor: [
        'rgba(255, 99, 132, 0.4)',    // สีสำหรับ ม.ค. - แดง
        'rgba(255, 159, 64, 0.4)',    // สีสำหรับ ก.พ. - ส้ม
        'rgba(255, 205, 86, 0.4)',    // สีสำหรับ มี.ค. - เหลือง
        'rgba(75, 192, 192, 0.4)',    // สีสำหรับ เม.ย. - เขียวอ่อน
        'rgba(54, 162, 235, 0.4)',    // สีสำหรับ พ.ค. - ฟ้า
        'rgba(153, 102, 255, 0.4)',   // สีสำหรับ มิ.ย. - ม่วง
        'rgba(201, 203, 207, 0.4)',   // สีสำหรับ ก.ค. - เทา
        'rgba(255, 0, 0, 0.4)',       // สีสำหรับ ส.ค. - แดงเข้ม
        'rgba(0, 255, 0, 0.4)',       // สีสำหรับ ก.ย. - เขียว
        'rgba(0, 0, 255, 0.4)',       // สีสำหรับ ต.ค. - น้ำเงิน
        'rgba(255, 0, 255, 0.4)',     // สีสำหรับ พ.ย. - ชมพู
        'rgba(0, 255, 255, 0.4)'      // สีสำหรับ ธ.ค. - ฟ้าอ่อน
      ],
      borderColor: [
        'rgb(255, 99, 132)',     // สีสำหรับ ม.ค. - แดง
        'rgb(255, 159, 64)',     // สีสำหรับ ก.พ. - ส้ม
        'rgb(255, 205, 86)',     // สีสำหรับ มี.ค. - เหลือง
        'rgb(75, 192, 192)',     // สีสำหรับ เม.ย. - เขียวอ่อน
        'rgb(54, 162, 235)',     // สีสำหรับ พ.ค. - ฟ้า
        'rgb(153, 102, 255)',    // สีสำหรับ มิ.ย. - ม่วง
        'rgb(201, 203, 207)',    // สีสำหรับ ก.ค. - เทา
        'rgb(255, 0, 0)',        // สีสำหรับ ส.ค. - แดงเข้ม
        'rgb(0, 255, 0)',        // สีสำหรับ ก.ย. - เขียว
        'rgb(0, 0, 255)',        // สีสำหรับ ต.ค. - น้ำเงิน
        'rgb(255, 0, 255)',      // สีสำหรับ พ.ย. - ชมพู
        'rgb(0, 255, 255)'       // สีสำหรับ ธ.ค. - ฟ้าอ่อน
      ]
    };

    if (!canvas1) {
      console.error("ไม่พบ element ที่มี id 'myChart1'");
    } else {
      // Chart 1: Bar แสดงรายสัปดาห์
      const ctx1 = canvas1.getContext("2d");
      new Chart(ctx1, {
        type: "bar",
        data: {
          labels: weeklyLabels,
          datasets: [{
            label: "จำนวนผู้ใช้บริการต่อวัน",
            data: weeklyData,
            backgroundColor: weeklyColors.backgroundColor,
            borderColor: weeklyColors.borderColor,
            borderWidth: 2
          }]
        },
        options: {
          scales: {
            x: {
              ticks: {
                color: 'white' // สีของ label แกน X
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                color: 'white' // สีของ label แกน Y
              }
            }
          },
          plugins: {
            legend: {
              labels: {
                color: 'white' // สีของ label ที่อยู่บนกราฟ (legend)
              }
            },
            tooltip: {
              callbacks: {
                // เพิ่มการแสดงผลใน tooltip
                title: function(tooltipItems) {
                  return weeklyLabels[tooltipItems[0].dataIndex];
                },
                label: function(context) {
                  return `จำนวนผู้ใช้บริการ: ${context.raw} คน`;
                }
              }
            }
          },
          responsive: true
        }
      });
    }

    if (!canvas2) {
      console.error("ไม่พบ element ที่มี id 'myChart2'");
    } else {
      // Chart 2: Line แสดงรายเดือนด้วยจุดสีแตกต่างกัน
      const ctx2 = canvas2.getContext("2d");
      
      // สร้างชุดข้อมูลเพื่อให้แต่ละจุดมีสีต่างกัน
      const pointBackgroundColors = [];
      const pointBorderColors = [];
      const pointRadius = [];
      
      // กำหนดสีและขนาดของจุดตามจำนวนข้อมูล
      for (let i = 0; i < monthlyData.length; i++) {
        pointBackgroundColors.push(monthlyColors.backgroundColor[i % 12]);
        pointBorderColors.push(monthlyColors.borderColor[i % 12]);
        pointRadius.push(6);  // ขนาดของจุด
      }
      
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: monthlyLabels,
          datasets: [{
            label: "จำนวนผู้ใช้บริการต่อเดือน",
            data: monthlyData,
            fill: false,
            backgroundColor: monthlyColors.backgroundColor,
            borderColor: 'rgba(0, 242, 255, 0.8)',  // เส้นกราฟสีเดียว
            pointBackgroundColor: pointBackgroundColors,  // สีของจุดแตกต่างกัน
            pointBorderColor: pointBorderColors,  // สีขอบของจุดแตกต่างกัน
            pointRadius: pointRadius,  // ขนาดของจุด
            borderWidth: 2,
            tension: 0.3
          }]
        },
        options: {
          scales: {
            x: {
              ticks: {
                color: 'white' // สีของ label แกน X
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                color: 'white' // สีของ label แกน Y
              }
            }
          },
          plugins: {
            legend: {
              labels: {
                color: 'white' // สีของ label ที่อยู่บนกราฟ (legend)
              }
            },
            tooltip: {
              callbacks: {
                // เพิ่มการแสดงผลใน tooltip
                title: function(tooltipItems) {
                  return monthlyLabels[tooltipItems[0].dataIndex];
                },
                label: function(context) {
                  return `จำนวนผู้ใช้บริการ: ${context.raw} คน`;
                }
              }
            }
          },
          responsive: true
        }
      });
    }

  } catch (err) {
    console.error("โหลดข้อมูล chart ไม่ได้:", err);
  }
}

  // เรียกใช้ฟังก์ชันโหลดข้อมูลกราฟ
  loadChartData();

  // ส่วนของปฏิทิน FullCalendar
  var calendarEl = document.getElementById('calendar');
  if (calendarEl && typeof FullCalendar !== 'undefined') {
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'en',
      headerToolbar: {
        left: '',
        center: 'title',
        right: 'prev,next today'
      },
      events: '/events',
      dayMaxEvents: true,
      dayMaxEvents: 2,
      height: 'auto'
    });
    
    calendar.render();
    console.log('Calendar initialized');
  } else if (!calendarEl) {
    console.log('Calendar element not found');
  } else {
    console.error('FullCalendar library not loaded');
  }

  // Event handlers for notifications
  document.querySelectorAll('.mark-read-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
      
      if (!csrfToken) {
        console.error('CSRF token not found');
        return;
      }

      fetch('/notification/read', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id })
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          const li = document.querySelector(`li[data-id="${id}"]`);
          if (li) li.remove();
        }
      })
      .catch(err => {
        console.error('Error marking notification as read:', err);
      });
    });
  });
});

</script>
@endpush
