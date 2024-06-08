<!-- resources/views/admin/gagasan.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gagasan</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li><a href="dashboard"><i class="bx bxs-dashboard"></i><span>Dashboard</span></a></li>
            <li class="active"><a href="gagasan"><i class="bx bxs-objects-vertical-bottom"></i><span>Jonegoro Jengker</span></a></li>
            <li><a href="input"><i class="bx bx-notepad"></i><span>Input Data</span></a></li>
            <li><a href="petisi"><i class="bx bxs-message-dots"></i><span>Petisi dan Kampanye</span></a></li>
            <li><a href="admin"><i class="bx bxs-message-dots"></i><span>Admin</span></a></li>
            <li class="logout">
        <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('actionlogout') }}"
   onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>
        </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span>Jonegoro Jengker</span>
                <span>Dashboard</span>
            </div>
            <div class="user-info">
                <div class="search">
                    <i class="bx bx-search-alt"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="{{ asset('images/government64px.png') }}" alt="">
            </div>
        </div>
        <div class="tabel-wrapper">
            <h3 class="main-title">Jonegoro Jengker</h3>
            <div class="tabel-container" id="data-container">
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($admin as $g)
                       <tr>
                        <td>{{$g->username}}</td>
                        <td>{{$g->password}}</td>
                        <td>
                           
                            <a href="/deletepetisi/{{$g->id_admin}}" class="btn btn-danger">Delete</a>
                        </td>
                       </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">Total Task: <span id="total-tasks">0</span></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            fetchData();
        });

        async function fetchData() {
            try {
                const response = await fetch('gagasan.data');
                const data = await response.json();
                displayData(data);
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        function displayData(data) {
            const tableBody = document.getElementById('table-body');
            const totalTasks = document.getElementById('total-tasks');
            let html = '';
            let no = 1;

            data.forEach(gagasan => {
                html += `
                    <tr>
                        <td>${no++}</td>
                        <td>${gagasan.judul_gagasan}</td>
                        <td>${gagasan.narasi_gagasan}</td>
                        <td>
                            ${gagasan.foto_dokumen ? `<img src="{{ asset('foto/') }}/${gagasan.foto_dokumen}" alt="Foto Dokumen" style="width: 100px;">` : 'Tidak ada foto'}
                        </td>
                        <td><span class="status status-${gagasan.status.toLowerCase()}">${gagasan.status}</span></td>
                        <td>
                            <div class="button-container">
                                <a href="/ubahgagasan/${gagasan.id_gagasan}" class="edit-button">Edit</a>
                                <a href="/deletegagasan/${gagasan.id_gagasan}" class="edit-button">Delete</a>
                            </div>
                        </td>
                    </tr>
                `;
            });

            tableBody.innerHTML = html;
            totalTasks.textContent = data.length;
        }

        async function printToPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF('p', 'mm', 'a4');
            const response = await fetch('gagasan.data');
            const data = await response.json();

            const headers = [["No", "Judul Gagasan", "Narasi Gagasan", "Foto", "Status"]];
            const rows = data.map((item, index) => [
                index + 1,
                item.judul_gagasan,
                item.narasi_gagasan,
                item.foto_dokumen ? 'Ada Foto' : 'Tidak ada foto',
                item.status
            ]);

            doc.autoTable({
                head: headers,
                body: rows,
                startY: 10,
                margin: { top: 10, right: 10, bottom: 10, left: 10 },
                styles: {
                    fontSize: 8,
                    cellPadding: 2,
                },
                columnStyles: {
                    0: { cellWidth: 10 },
                    1: { cellWidth: 40 },
                    2: { cellWidth: 70 },
                    3: { cellWidth: 20 },
                    4: { cellWidth: 20 }
                },
                didDrawCell: data => {
                    if (data.column.index === 3 && data.cell.section === 'body') {
                        const img = new Image();
                        img.src = data.cell.raw === 'Ada Foto' ? "{{ asset('foto/') }}/" + data.row.raw[3] : "";
                        doc.addImage(img, 'JPEG', data.cell.x + 2, data.cell.y + 2, 10, 10);
                    }
                }
            });

            doc.save('gagasan.pdf');
        }

        function confirmRemove(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                document.getElementById('removeForm_' + id).submit();
            }
        }
    </script>
</body>
</html>