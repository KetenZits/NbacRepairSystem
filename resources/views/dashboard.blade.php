@extends('dashboardlayout')
@section('title')
    Dashboard
@endsection
{{-- aos --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{-- calendar link --}}
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet' />
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
  .modern-card {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border: 1px solid rgba(59, 130, 246, 0.1);
    backdrop-filter: blur(10px);
  }
  .glass-effect {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(59, 130, 246, 0.2);
  }
  .chart-container {
    background: linear-gradient(145deg, #ffffff 0%, #f1f5f9 100%);
    box-shadow: 0 8px 32px rgba(59, 130, 246, 0.1);
  }
  .notification-item {
    background: rgba(255, 255, 255, 0.95);
    border-left: 4px solid #3b82f6;
    transition: all 0.3s ease;
  }
  .notification-item:hover {
    background: rgba(239, 246, 255, 0.9);
    transform: translateX(5px);
  }
  .stat-modern {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border: 1px solid rgba(59, 130, 246, 0.15);
    box-shadow: 0 4px 20px rgba(59, 130, 246, 0.08);
  }
</style>

@section('content')
<div class="min-h-screen bg-gradient-to-br">
  <div class="container mx-auto px-5 py-6">
    <!-- Navigation Bar -->
    <div class="glass-effect navbar rounded-2xl shadow-lg mb-8">
      <div class="navbar-start">
        <a class="btn btn-ghost rounded-xl text-xl ml-5 text-blue-600 hover:bg-blue-50 hover:text-blue-700 font-semibold">Dashboard</a>
      </div>
      <div class="navbar-end">
        <button class="btn btn-ghost btn-circle hover:bg-blue-50 hover:text-blue-600" onclick="my_modal_3.showModal()">
          <div class="indicator">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            @if($unreadCount > 0)
              <span class="badge badge-sm bg-blue-500 border-blue-500 text-white">{{ $unreadCount }}</span>
            @endif
          </div>
        </button>
      </div>
    </div>

    <!-- Notification Modal -->
    <dialog id="my_modal_3" class="modal">
      <div class="modal-box glass-effect border-l-4 border-blue-500 max-w-[36rem]">
        <form method="dialog">
          <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 hover:bg-blue-50">✕</button>
        </form>
        <h3 class="text-lg font-bold text-slate-700 mb-4">📢 Notification Center</h3>
        @if(isset($notifications1))
        <ul class="mt-5 space-y-3">
          @foreach ($notifications1 as $notification)
          <form action="{{ route('notifications.read', $notification->id) }}" method="POST">
            @csrf
            <button type="submit" class="w-full text-left">
              <div class="notification-item p-4 rounded-lg @if (!$notification->is_read) font-medium @endif">
                <p class="text-slate-700">{{ $notification->message }}</p>
                <span class="text-xs text-slate-500">{{ $notification->created_at->diffForHumans() }}</span>
              </div>
            </button>
          </form>
          @endforeach
        </ul>
        @endif
        <div class="mt-6">
          <form action="{{ route('mark-all-read') }}" method="POST">
            @csrf
            <button type="submit" class="btn bg-blue-500 hover:bg-blue-600 text-white border-none">Mark All Read</button>
          </form>
        </div>
      </div>
    </dialog>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mb-10">
      <div class="chart-container rounded-2xl shadow-lg p-6">
        <h3 class="text-lg font-semibold text-slate-700 mb-4">📊 Weekly Statistics</h3>
        <canvas id="myChart1"></canvas>
      </div>
      <div class="chart-container rounded-2xl shadow-lg p-6">
        <h3 class="text-lg font-semibold text-slate-700 mb-4">📈 Monthly Overview</h3>
        <canvas id="myChart2"></canvas>
      </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <div class="stat-modern p-6 rounded-2xl">
        <div class="flex items-center justify-between">
          <div>
            <div class="text-sm font-medium text-slate-600 mb-1">รายสัปดาห์</div>
            <div class="text-3xl font-bold text-blue-600">{{ $weekcount }}</div>
            <div class="text-xs text-slate-500 mt-1">จันทร์ - อาทิตย์</div>
          </div>
          <div class="text-4xl text-blue-500">
            <i class="fas fa-tools"></i>
          </div>
        </div>
      </div>
      
      <div class="stat-modern p-6 rounded-2xl">
        <div class="flex items-center justify-between">
          <div>
            <div class="text-sm font-medium text-slate-600 mb-1">รายเดือน</div>
            <div class="text-3xl font-bold text-emerald-600">{{ $monthcount }}</div>
            <div class="text-xs text-slate-500 mt-1">ต้นเดือน - สิ้นเดือน</div>
          </div>
          <div class="text-4xl text-emerald-500">
            <i class="fas fa-tools"></i>
          </div>
        </div>
      </div>

      <div class="stat-modern p-6 rounded-2xl">
        <div class="flex items-center justify-between">
          <div>
            <div class="text-sm font-medium text-slate-600 mb-1">รายปี</div>
            <div class="text-3xl font-bold text-purple-600">{{ $yearcount }}</div>
            <div class="text-xs text-slate-500 mt-1">ต้นปี - สิ้นปี</div>
          </div>
          <div class="text-4xl text-purple-500">
            <i class="fas fa-tools"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Section -->
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
      <!-- Notifications List -->
      <div class="glass-effect rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-fuchsia-500 to-blue-500 px-6 py-4">
          <h3 class="text-lg font-semibold text-white">🔔 Recent Tasks</h3>
        </div>
        <div class="p-6">
          @forEach($notifications2 as $notification)
          <div class="flex items-center space-x-4 p-4 rounded-xl hover:bg-blue-50 transition-all duration-300 mb-3 border border-slate-100">
            <div class="text-blue-500 text-2xl flex-shrink-0">
              <i class="fas fa-tools"></i>
            </div>
            <div class="flex-1">
              <p class="text-slate-700 font-medium">{{ $notification->message }}</p>
              <div class="text-xs text-slate-500 mt-1">{{ $notification->created_at->diffForHumans() }}</div>
            </div>
            <button class="btn btn-sm bg-blue-500 hover:bg-blue-600 text-white border-none rounded-full">
              <a href="/service-view" target="_blank">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 3L20 12 6 21 6 3z"></path>
                </svg>
              </a>
            </button>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Calendar -->
      <div class="glass-effect rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-fuchsia-500 px-6 py-4">
          <h3 class="text-lg font-semibold text-white">📅 Calendar View</h3>
        </div>
        <div class="p-6">
          <div id='calendar' class="max-h-[600px] overflow-auto"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/th.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  if (typeof Chart === 'undefined') {
    console.error("Chart.js ไม่ถูกโหลด");
    return;
  }

  async function loadChartData() {
    try {
      const res = await fetch("/booking-chart-data");
      const data = await res.json();
      
      const days = ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์"];
      const weeklyLabels = data.weekly.map(item => days[item.day - 1]);
      const weeklyData = data.weekly.map(item => item.total);

      const months = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
      const monthlyLabels = data.monthly.map(item => months[item.month - 1]);
      const monthlyData = data.monthly.map(item => item.total);

      const canvas1 = document.getElementById("myChart1");
      const canvas2 = document.getElementById("myChart2");

      if (canvas1) {
        const ctx1 = canvas1.getContext("2d");
        new Chart(ctx1, {
          type: "bar",
          data: {
            labels: weeklyLabels,
            datasets: [{
              label: "จำนวนผู้ใช้บริการต่อวัน",
              data: weeklyData,
              backgroundColor: [
                'rgba(59, 130, 246, 0.8)', 'rgba(16, 185, 129, 0.8)', 'rgba(245, 101, 101, 0.8)',
                'rgba(139, 92, 246, 0.8)', 'rgba(245, 158, 11, 0.8)', 'rgba(236, 72, 153, 0.8)', 'rgba(107, 114, 128, 0.8)'
              ],
              borderColor: [
                'rgb(59, 130, 246)', 'rgb(16, 185, 129)', 'rgb(245, 101, 101)',
                'rgb(139, 92, 246)', 'rgb(245, 158, 11)', 'rgb(236, 72, 153)', 'rgb(107, 114, 128)'
              ],
              borderWidth: 2,
              borderRadius: 8
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: { labels: { color: '#475569' } }
            },
            scales: {
              x: { ticks: { color: '#64748b' } },
              y: { beginAtZero: true, ticks: { color: '#64748b' } }
            }
          }
        });
      }

      if (canvas2) {
        const ctx2 = canvas2.getContext("2d");
        new Chart(ctx2, {
          type: "line",
          data: {
            labels: monthlyLabels,
            datasets: [{
              label: "จำนวนผู้ใช้บริการต่อเดือน",
              data: monthlyData,
              borderColor: 'rgb(59, 130, 246)',
              backgroundColor: 'rgba(59, 130, 246, 0.1)',
              pointBackgroundColor: 'rgb(59, 130, 246)',
              pointBorderColor: '#fff',
              pointBorderWidth: 3,
              pointRadius: 6,
              borderWidth: 3,
              fill: true,
              tension: 0.4
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: { labels: { color: '#475569' } }
            },
            scales: {
              x: { ticks: { color: '#64748b' } },
              y: { beginAtZero: true, ticks: { color: '#64748b' } }
            }
          }
        });
      }
    } catch (err) {
      console.error("โหลดข้อมูล chart ไม่ได้:", err);
    }
  }

  loadChartData();

  // Calendar
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
      dayMaxEvents: 2,
      height: 'auto'
    });
    calendar.render();
  }

  // Notification handlers
  document.querySelectorAll('.mark-read-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const id = this.getAttribute('data-id');
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
      
      if (!csrfToken) return;

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
      .catch(err => console.error('Error:', err));
    });
  });
});
</script>
@endpush