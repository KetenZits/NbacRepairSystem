@extends('dashboardlayout')
@section('title')
    Dashboard
@endsection
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
              <span class="badge badge-xs badge-error indicator-item"></span>
            </div>
          </button>
        </div>
      </div>

      <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
          <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
          </form>
          <h3 class="text-lg font-bold">Hello!</h3>
          <p class="py-4">Press ESC key or click on ✕ button to close</p>
        </div>
      </dialog>

      <div class="flex flex-col items-center justify-between my-10 lg:flex-row lg:flex-wrap lg:justify-around">
      <div class="flex">
        <div class="w-85 xl:w-170 md:w-150 sm:w-120 bg-slate-600 shadow-md rounded-2xl my-2">
            <canvas id="myChart1" class="px-3 py-5"></canvas>
        </div>
      </div>
      <div class="flex">
        <div class="w-85 xl:w-170 md:w-150 sm:w-120 bg-slate-600 shadow-md rounded-2xl my-2">
            <canvas id="myChart2" class="px-3 py-5"></canvas>
        </div>
      </div>
      </div>  
    </div>

    <div class="w-full flex justify-center items-center my-5">
      <div class="stats w-full  stats-vertical lg:stats-horizontal shadow-md">
      <div class="stat">
        <div class="stat-figure text-primary">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            class="inline-block h-8 w-8 stroke-current">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
        </div>
        <div class="stat-title text-2xl">การซ่อมรายวัน</div>
        <div class="stat-value text-primary">999</div>
        <div class="stat-desc text-primary">21% more than last month</div>
      </div>
    
      <div class="stat">
        <div class="stat-figure text-secondary">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            class="inline-block h-8 w-8 stroke-current">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <div class="stat-title text-2xl">การซ่อมรายเดือน</div>
        <div class="stat-value text-secondary">999</div>
        <div class="stat-desc text-secondary">21% more than last month</div>
      </div>
    
      <div class="stat">
        <div class="stat-figure text-info">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            class="inline-block h-8 w-8 stroke-current">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <div class="stat-title text-2xl">การซ่อมรายปี</div>
        <div class="stat-value text-info">999</div>
        <div class="stat-desc text-info">31 tasks remaining</div>
      </div>
    </div>
  </div>

  <div class="flex flex-col gap-5 justify-around lg:flex-row">

    <ul class="list bg-base-100 rounded-box shadow-md w-full"> 
      <li class="list-row tracking-wide">Notification Task</li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/1@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการแจ้งซ่อม 001</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/4@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการแจ้งซ่อม 001</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการแจ้งซ่อม 001</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการแจ้งซ่อม 001</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>

      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการแจ้งซ่อม 001</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
    </ul>

    <ul class="list bg-base-100 rounded-box shadow-md w-full"> 
      <li class="list-row tracking-wide">Export Excel History</li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/1@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการ Export Report แจ้งซ่อม ณ วันที่ date</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/4@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการ Export Report แจ้งซ่อม ณ วันที่ date</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการ Export Report แจ้งซ่อม ณ วันที่ date</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
      
      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการ Export Report แจ้งซ่อม ณ วันที่ date</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>

      <li class="list-row h-[100px] items-center hover:bg-base-200 transition cursor-pointer">
        <div><img class="size-10 rounded-box" src="https://img.daisyui.com/images/profile/demo/3@94.webp"/></div>
        <div>
          <div>Tester001</div>
          <div class="text-xs uppercase font-semibold opacity-60">ได้ทำการ Export Report แจ้งซ่อม ณ วันที่ date</div>
        </div>
        <button class="btn rounded-full btn-info text-white">
          <svg class="size-[1.2em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M6 3L20 12 6 21 6 3z"></path></g></svg>
        </button>
      </li>
    </ul>
  </div>
@endsection
@push('scripts')
<!-- โหลด Chart.js ก่อน -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- สคริปต์สร้างกราฟ -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const ctx1 = document.getElementById("myChart1").getContext("2d");

    const myChart1 = new Chart(ctx1, {
      type: "bar",
      data: {
        labels: ["แดง", "น้ำเงิน", "เขียว", "เหลือง"],
        datasets: [
          {
            label: "คะแนน",
            data: [12, 19, 3, 5],
            backgroundColor: [
              "rgba(255, 99, 132, 0.5)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(75, 192, 192, 0.5)",
              "rgba(255, 206, 86, 0.5)"
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(255, 206, 86, 1)"
            ],
            borderWidth: 2,
          }
        ]
      },
      options: {
        responsive: true,
        scales: {
          x: {
            ticks: {
              color: '#FFFFFF',
              font: {
                family: 'Noto Sans Thai',
                size: 12
              }
            }
          },
          y: {
            ticks: {
              color: '#FFFFFF',
              font: {
                family: 'Noto Sans Thai',
                size: 12
              }
            }
          }
        }
      }
    });

    const ctx2 = document.getElementById("myChart2").getContext("2d");

    const myChart2 = new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["แดง", "น้ำเงิน", "เขียว", "เหลือง"],
        datasets: [
          {
            label: "คะแนน",
            data: [7, 14, 10, 6],
            backgroundColor: [
              "rgba(255, 99, 132, 0.5)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(75, 192, 192, 0.5)",
              "rgba(255, 206, 86, 0.5)"
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(255, 206, 86, 1)"
            ],
            borderWidth: 2,
          }
        ]
      },
      options: {
        responsive: true,
        scales: {
          x: {
            ticks: {
              color: '#FFFFFF',
              font: {
                family: 'Noto Sans Thai',
                size: 12
              }
            }
          },
          y: {
            ticks: {
              color: '#FFFFFF',
              font: {
                family: 'Noto Sans Thai',
                size: 12
              }
            }
          }
        }
      }
    });
  });
</script>

