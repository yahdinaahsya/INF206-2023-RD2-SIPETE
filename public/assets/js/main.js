// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


// data untuk statistik
// ini bagian dari data setiap bulan dan tahun
// ini berada di dashboard
// 3 atributnya adalah
// views, penjualan, dan donasi
const data = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
  datasets: [
    {
      label: 'Views',
      data: [120, 110, 100, 90, 80, 70],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
    },
    {
      label: 'Penjualan',
      data: [20, 30, 25, 35, 40, 50],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    },
    {
      label: 'Donasi',
      data: [15, 10, 20, 30, 25, 20],
      backgroundColor: 'rgba(255, 206, 86, 0.2)',
      borderColor: 'rgba(255, 206, 86, 1)',
      borderWidth: 1
    }
  ]
};

const config = {
  type: 'bar',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top'
      },
      title: {
        display: true,
        text: 'Statistics'
      }
    },
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

var myChart = new Chart(
  document.getElementById('myChart'),
  config
);

// ---------------------------------------
// ini fungsi untuk search di admin
// fungsi ini akan mencari keyword 

// take elemen input dan tombol pencarian halaman admin
const searchInput = document.querySelector('.search input');
const searchButton = document.querySelector('.search ion-icon');

// menambahkan event listener pencarian di halaman admin
searchButton.addEventListener('click',function(){
  //take ka14ta kunci pencarian
  const keyword = searchInput.value;

});

// menambahkan search event listener pada input
searchInput.addEventListener('keyup', function(event){
  // jika tombol enter ditekan lakukan proses pencarian
  if(event.keyCode ===13){
    const keyword = searchInput.value;
    //proses pencarian
  }
});



//fungsi untuk menghitung jumlah user di dashboard admin
function getCount() {
  // Kirim permintaan AJAX ke URL yang mengembalikan jumlah data
  fetch('/count')
    .then(response => response.json())
    .then(data => {
      // Menampilkan jumlah data pada elemen HTML dengan kelas "numbers"
      document.querySelector('#user-count').textContent = data.count;
    })
    .catch(error => console.error(error));
}

// Panggil fungsi getCount() saat halaman dimuat
document.addEventListener('DOMContentLoaded', getCount);


//fungsi untuk menghitung jumlah penjualan di dashboard admin
function getCountPenjualan() {
  // Kirim permintaan AJAX ke URL yang mengembalikan jumlah data
  fetch('/countPenjualan')
    .then(response => response.json())
    .then(data => {
      // Menampilkan jumlah data pada elemen HTML dengan kelas "numbers"
      document.querySelector('#jual-count').textContent = data.count;
    })
    .catch(error => console.error(error));
}

// Panggil fungsi getCountPenjualan() saat halaman dimuat
document.addEventListener('DOMContentLoaded', getCountPenjualan);

//fungsi untuk menghitung jumlah penjualan di dashboard admin
function getCountDonasi() {
  // Kirim permintaan AJAX ke URL yang mengembalikan jumlah data
  fetch('/countPenjualan')
    .then(response => response.json())
    .then(data => {
      // Menampilkan jumlah data pada elemen HTML dengan kelas "numbers"
      document.querySelector('#donasi-count').textContent = data.count;
    })
    .catch(error => console.error(error));
}

// Panggil fungsi getCountDonasi saat halaman dimuat
document.addEventListener('DOMContentLoaded', getCountDonasi);


// ---------------------------------------------------
//pencarian data di halaman admin

    function searchKeyword() {
        var keyword = document.getElementById('keyword').value.toLowerCase();
        var textElements = document.querySelectorAll('body *:not(script)');
        var found = false;
        for (var i = 0; i < textElements.length; i++) {
            var elementText = textElements[i].textContent.toLowerCase();
            if (elementText.includes(keyword)) {
                textElements[i].style.backgroundColor = "#ffff66";
                found = true;
            } else {
                textElements[i].style.backgroundColor = "";
            }
        }
        if (!found) {
            var messageElement = document.createElement("div");
            messageElement.innerText = "No results found for '" + keyword + "'";
            messageElement.style.backgroundColor = "#f44336";
            messageElement.style.color = "white";
            messageElement.style.padding = "10px";
            messageElement.style.position = "absolute";
            messageElement.style.top = "50%";
            messageElement.style.left = "50%";
            messageElement.style.transform = "translate(-50%, -50%)";
            document.body.appendChild(messageElement);
            setTimeout(function() {
                messageElement.remove();
            }, 3000);
        }
    }

    document.getElementById('keyword').addEventListener('input', function() {
        for (var i = 0; i < textElements.length; i++) {
            textElements[i].style.backgroundColor = "";
        }
        searchKeyword();
    });

