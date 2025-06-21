// Fungsi untuk menampilkan ras hewan berdasarkan jenis (dog/cat)
function showBreeds(petType) {
    const targetSection = document.getElementById(petType + "Breeds");
    if (!targetSection) {
        console.error("Section tidak ditemukan untuk jenis hewan:", petType);
        return;
    }
    document.querySelectorAll(".breeds-section").forEach((section) => {
        section.style.display = "none";
    });
    targetSection.style.display = "block";
}

// Fungsi untuk menampilkan detail ras dalam modal
function showBreedDetail(breed) {
    // Dapatkan elemen modal
    const modal = document.getElementById("breedModal");
    const modalContent = document.getElementById("modalContent");
    
    if (!modal || !modalContent) {
        console.error("Modal elements tidak ditemukan");
        return;
    }

    // Dapatkan konten detail breed
    const breedDetailContainer = document.getElementById(breed + "-detail");
    if (!breedDetailContainer) {
        console.error("Detail container tidak ditemukan untuk breed:", breed);
        return;
    }

    // Klon konten untuk ditampilkan di modal
    const contentClone = breedDetailContainer.cloneNode(true);
    contentClone.classList.remove("hidden");
    
    // Kosongkan konten modal sebelumnya dan tambahkan yang baru
    modalContent.innerHTML = "";
    modalContent.appendChild(contentClone);
    
    // Tampilkan modal
    modal.style.display = "block";
    
    // Aktifkan tab biografi secara default
    const bioTab = contentClone.querySelector("#" + breed + "-biografi");
    if (bioTab) {
        contentClone.querySelectorAll(".tab-content").forEach((content) => {
            content.classList.remove("active");
        });
        bioTab.classList.add("active");
    }

    // Aktifkan button tab biografi
    const tabButtons = contentClone.querySelectorAll(".tab-btn");
    tabButtons.forEach(button => {
        button.classList.remove("active");
    });
    const bioButton = contentClone.querySelector(".tab-btn:first-child");
    if (bioButton) {
        bioButton.classList.add("active");
    }
}

// Fungsi untuk menampilkan tab di dalam modal
function showTab(tabName) {
    const modalContent = document.getElementById("modalContent");
    const breedDetailContainer = modalContent.firstElementChild;
    
    if (!breedDetailContainer) {
        console.error("Breed detail container tidak ditemukan dalam modal");
        return;
    }

    const breed = breedDetailContainer.id.replace("-detail", "");
    const newTab = modalContent.querySelector("#" + breed + "-" + tabName);
    
    if (!newTab) {
        console.error("Tab content tidak ditemukan:", tabName);
        return;
    }

    // Nonaktifkan semua tab content
    modalContent.querySelectorAll(".tab-content").forEach((content) => {
        content.classList.remove("active");
    });
    
    // Aktifkan tab content yang dipilih
    newTab.classList.add("active");

    // Update status aktif pada button tab
    const tabButtons = modalContent.querySelectorAll(".tab-btn");
    tabButtons.forEach(button => {
        button.classList.remove("active");
        if (button.textContent.toLowerCase().includes(tabName.toLowerCase())) {
            button.classList.add("active");
        }
    });
}

// Event handlers untuk modal
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("breedModal");
    const closeBtn = document.querySelector(".modal-close");

    // Sembunyikan sections saat pertama kali load
    document.querySelectorAll(".breeds-section").forEach((section) => {
        section.style.display = "none";
    });

    if (closeBtn && modal) {
        // Tutup modal saat klik tombol close (x)
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };

        // Tutup modal saat klik di luar modal
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    }
});
