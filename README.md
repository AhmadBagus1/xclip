# Xclip Website

Website company profile dan business information system untuk **Xclip**, yang dikembangkan menggunakan Laravel dengan pendekatan modern, responsive, dan dynamic content management.

Website ini menyediakan halaman publik untuk menampilkan informasi perusahaan, layanan, project, berita, dokumen, kontak, serta Request for Quote (RFQ). Selain itu, tersedia halaman admin untuk mengelola berbagai data yang ditampilkan pada website publik.

---

## 📌 About Xclip

Xclip Website merupakan website company profile yang dirancang untuk membantu perusahaan dalam menyampaikan informasi mengenai:

- Profil perusahaan
- Layanan yang tersedia
- Project yang telah dan sedang dikerjakan
- Berita dan informasi terbaru
- Dokumen dan file yang dapat diunduh
- Informasi kontak dan lokasi perusahaan
- Request for Quote (RFQ)

Website menggunakan konsep **dynamic content**, sehingga data tertentu yang ditampilkan pada halaman publik dapat dikelola melalui halaman admin tanpa harus mengubah kode secara langsung.

---

## 🚀 Features

### 🌐 Public Website

- Home
- About
- Services
- Projects
- News
- Downloads
- Contact
- Request for Quote (RFQ)
- Responsive layout
- Dynamic company information
- Dynamic Google Maps
- Dynamic news
- Dynamic projects
- Dynamic downloads

### 🔐 Admin Panel

- Admin authentication
- Super Admin account
- Login attempt protection
- Dashboard
- Profile management
- Profile photo
- Password change
- Site settings
- News management
- Project management
- Download management
- RFQ management
- Delete confirmation
- Dynamic content management

### 📰 News Management

Admin dapat:

- Menambahkan berita
- Mengubah berita
- Melihat detail berita
- Menghapus berita
- Menentukan kategori berita
- Menentukan tanggal publikasi
- Mengatur berita aktif/nonaktif
- Menentukan berita sebagai featured
- Mengunggah thumbnail berita

Featured news pada halaman publik dapat menampilkan lebih dari satu berita. Berita yang ditandai sebagai featured tidak akan ditampilkan kembali pada bagian Latest Updates.

### 📁 Downloads Management

Admin dapat mengelola dokumen atau file yang tersedia untuk pengunjung website.

### 🏗️ Projects Management

Project dapat ditampilkan secara dinamis pada halaman publik berdasarkan data yang dikelola melalui admin panel.

### 📩 Request for Quote

Pengunjung dapat mengirimkan permintaan penawaran melalui form RFQ.

Data RFQ kemudian dapat dilihat oleh Super Admin melalui admin panel.

Sistem juga memiliki status pembacaan RFQ untuk membedakan data yang masih baru dan yang sudah dibaca.

### 📞 Contact & Site Settings

Informasi perusahaan dapat dikelola melalui Site Settings, seperti:

- Site name
- Email
- Phone
- WhatsApp
- Address
- Business days
- Business hours
- Google Maps Embed URL

Google Maps menggunakan URL Embed yang disimpan pada database sehingga lokasi dapat diperbarui melalui Settings.

---

## 🛠️ Technologies

Project ini menggunakan beberapa teknologi berikut:

| Technology | Usage |
|------------|-------|
| PHP | Backend |
| Laravel 13 | Web framework |
| MySQL | Database |
| Blade | Template engine |
| HTML | Website structure |
| CSS | Styling |
| JavaScript | Client-side interaction |
| Vite | Frontend asset bundling |
| DoodleCSS-inspired design | Visual design |

---

## 🎨 Design

Xclip menggunakan pendekatan visual **Doodle / Hand-drawn Corporate Design**.

Beberapa karakteristik desain:

- Hand-drawn style
- Sketch-like borders
- Bold typography
- Irregular card rotation
- Hand-drawn visual elements
- Strong contrast
- Corporate color palette
- Responsive layout

CSS dibuat secara modular berdasarkan fungsi dan halaman agar lebih mudah dikembangkan dan dipelihara.

Contoh struktur CSS:

```text
resources/
└── css/
    ├── app.css
    ├── base/
    ├── components/
    ├── pages/
    └── admin/
