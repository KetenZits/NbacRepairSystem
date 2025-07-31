@extends('dashboardlayout')
@section('title', 'Graph Data')
@section('content')
<div class="min-h-screen bg-gradient-to-br">
    <div class="container mx-auto px-5 py-6">
    <!-- Navigation Bar -->
        <nav class="glass-effect rounded-2xl shadow-xl mb-8 p-4">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white text-sm">📊</span>
                    </div>
                    Dashboard
                </h1>
                <div class="hidden md:flex items-center gap-4">
                    <div class="text-sm text-gray-600">
                        <span>อัปเดตล่าสุด: </span>
                        <span class="font-semibold" id="lastUpdate"></span>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Chart Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Daily Chart -->
            <div class="glass-effect rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <span class="text-2xl">📅</span>
                        รายวัน
                    </h2>
                    <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                </div>
                <div class="chart-container">
                    <canvas id="chartDay" height="325"></canvas>
                </div>
            </div>

            <!-- Weekly Chart -->
            <div class="glass-effect rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <span class="text-2xl">📊</span>
                        รายสัปดาห์
                    </h2>
                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                </div>
                <div class="chart-container">
                    <canvas id="chartWeek" height="325"></canvas>
                </div>
            </div>

            <!-- Monthly Chart -->
            <div class="glass-effect rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <span class="text-2xl">📈</span>
                        รายเดือน
                    </h2>
                    <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse"></div>
                </div>
                <div class="chart-container">
                    <canvas id="chartMonth" height="325"></canvas>
                </div>
            </div>

            <!-- Yearly Chart -->
            <div class="glass-effect rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <span class="text-2xl">🎯</span>
                        รายปี
                    </h2>
                    <div class="w-3 h-3 bg-orange-500 rounded-full animate-pulse"></div>
                </div>
                <div class="chart-container">
                    <canvas id="chartYear" height="325"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartConfigs = {
    day: {
        gradient: ['#3B82F6', '#1D4ED8'],
        icon: '📅',
        color: 'rgb(59, 130, 246)'
    },
    week: {
        gradient: ['#10B981', '#059669'],
        icon: '📊',
        color: 'rgb(16, 185, 129)'
    },
    month: {
        gradient: ['#8B5CF6', '#7C3AED'],
        icon: '📈',
        color: 'rgb(139, 92, 246)'
    },
    year: {
        gradient: ['#F59E0B', '#D97706'],
        icon: '🎯',
        color: 'rgb(245, 158, 11)'
    }
};

function createGradient(ctx, color1, color2) {
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, color1);
    gradient.addColorStop(1, color2);
    return gradient;
}

// Function to fetch data from API
async function fetchChartData(url) {
    try {
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        });
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching chart data:', error);
        // Return fallback mock data if API fails
        return getFallbackData(url);
    }
}

// Fallback mock data (same as before)
function getFallbackData(url) {
    const mockData = {
        '/chart/day': { 
            labels: ['จันทร์', 'อังคาร', 'พุธ', 'พฤหัส', 'ศุกร์', 'เสาร์', 'อาทิตย์'],
            data: [120, 150, 180, 200, 250, 190, 160]
        },
        '/chart/week': {
            labels: ['สัปดาห์ 1', 'สัปดาห์ 2', 'สัปดาห์ 3', 'สัปดาห์ 4'],
            data: [800, 950, 1100, 890]
        },
        '/chart/month': {
            labels: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.'],
            data: [3200, 3800, 4200, 3900, 4500, 4100]
        },
        '/chart/year': {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            data: [35000, 42000, 48000, 52000, 58000]
        }
    };
    
    return mockData[url] || { labels: [], data: [] };
}

// Show loading state
function showLoading(canvasId) {
    const canvas = document.getElementById(canvasId);
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = '#6B7280';
    ctx.font = '16px Arial';
    ctx.textAlign = 'center';
    ctx.fillText('กำลังโหลดข้อมูล...', canvas.width / 2, canvas.height / 2);
}

async function renderModernChart(canvasId, url, labelText, type) {
    const canvas = document.getElementById(canvasId);
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    const config = chartConfigs[type];

    // Show loading state
    showLoading(canvasId);

    try {
        // Fetch real data from API
        const data = await fetchChartData(url);
        
        // Validate data structure
        if (!data.labels || !data.data || !Array.isArray(data.labels) || !Array.isArray(data.data)) {
            throw new Error('Invalid data structure from API');
        }

        const gradient = createGradient(ctx, config.gradient[0], config.gradient[1]);

        // Destroy existing chart if it exists
        if (window.charts && window.charts[canvasId]) {
            window.charts[canvasId].destroy();
        }

        // Initialize charts object if it doesn't exist
        if (!window.charts) {
            window.charts = {};
        }

        // Create new chart
        window.charts[canvasId] = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.labels,
                datasets: [{
                    label: labelText,
                    data: data.data,
                    backgroundColor: gradient,
                    borderColor: config.color,
                    borderWidth: 2,
                    borderRadius: {
                        topLeft: 8,
                        topRight: 8,
                        bottomLeft: 0,
                        bottomRight: 0
                    },
                    borderSkipped: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        borderColor: config.color,
                        borderWidth: 1,
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            title: function(context) {
                                return config.icon + ' ' + context[0].label;
                            },
                            label: function(context) {
                                return labelText + ': ' + context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#6B7280',
                            font: {
                                size: 12,
                                weight: '500'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(107, 114, 128, 0.1)',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#6B7280',
                            font: {
                                size: 12
                            },
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                animation: {
                    duration: 1000,
                    easing: 'easeOutQuart'
                }
            }
        });

        // Update stats
        const total = data.data.reduce((a, b) => a + b, 0);
        const statElement = document.getElementById(`total${type.charAt(0).toUpperCase() + type.slice(1)}`);
        if (statElement) {
            statElement.textContent = total.toLocaleString();
        }
        
        console.log(`Chart ${type} loaded successfully with ${data.data.length} data points`);
        
    } catch (error) {
        console.error(`Error rendering chart ${type}:`, error);
        
        // Show error message on canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = '#EF4444';
        ctx.font = '14px Arial';
        ctx.textAlign = 'center';
        ctx.fillText('เกิดข้อผิดพลาดในการโหลดข้อมูล', canvas.width / 2, canvas.height / 2 - 10);
        ctx.fillStyle = '#6B7280';
        ctx.font = '12px Arial';
        ctx.fillText('กรุณาลองอีกครั้ง', canvas.width / 2, canvas.height / 2 + 10);
    }
}

// Function to refresh all charts
async function refreshAllCharts() {
    const charts = [
        { canvasId: "chartDay", url: "/chart/day", label: "ผู้ใช้บริการรายวัน", type: "day" },
        { canvasId: "chartWeek", url: "/chart/week", label: "ผู้ใช้บริการรายสัปดาห์", type: "week" },
        { canvasId: "chartMonth", url: "/chart/month", label: "ผู้ใช้บริการรายเดือน", type: "month" },
        { canvasId: "chartYear", url: "/chart/year", label: "ผู้ใช้บริการรายปี", type: "year" }
    ];
    
    // Show loading state for all charts
    charts.forEach(chart => showLoading(chart.canvasId));
    
    // Load all charts concurrently
    await Promise.allSettled(
        charts.map(chart => 
            renderModernChart(chart.canvasId, chart.url, chart.label, chart.type)
        )
    );
    
    // Update timestamp
    const lastUpdateElement = document.getElementById('lastUpdate');
    if (lastUpdateElement) {
        lastUpdateElement.textContent = new Date().toLocaleString('th-TH');
    }
}

// Initialize charts when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    refreshAllCharts();
});

// Auto refresh every 5 minutes
setInterval(() => {
    console.log('Auto refreshing charts...');
    refreshAllCharts();
}, 300000);

// Manual refresh function (can be called from button)
window.refreshCharts = refreshAllCharts;
</script>
@endpush