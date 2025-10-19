@extends('layouts.app')

@section('content')
<style>
/* Pengelolaan Page Styles */
body {
  background-color: #1a1f35;
  background-image: 
    radial-gradient(circle at 20% 50%, rgba(30, 60, 114, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 80% 80%, rgba(42, 82, 152, 0.3) 0%, transparent 50%),
    radial-gradient(circle at 40% 20%, rgba(30, 60, 114, 0.2) 0%, transparent 50%);
}

.pengelolaan-wrapper {
  min-height: 100vh;
  padding: 3rem 0;
}

.page-header {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  padding: 2.5rem;
  border-radius: 20px 20px 0 0;
  margin-bottom: 0;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.page-header h2 {
  color: #fff;
  font-weight: 700;
  font-size: 2rem;
  margin: 0;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  text-align: center;
}

.page-header p {
  color: rgba(255, 255, 255, 0.9);
  margin: 0.5rem 0 0 0;
  text-align: center;
  font-size: 1rem;
}

.table-container {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 0 0 20px 20px;
  padding: 2rem;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
  backdrop-filter: blur(10px);
}

.table-actions {
  margin-bottom: 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1rem;
}

.search-box {
  position: relative;
  flex: 1;
  max-width: 400px;
}

.search-box input {
  border-radius: 10px;
  border: 2px solid #e9ecef;
  padding: 0.6rem 1rem 0.6rem 2.5rem;
  width: 100%;
  transition: all 0.3s ease;
}

.search-box input:focus {
  border-color: #2a5298;
  box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.15);
}

.search-icon {
  position: absolute;
  left: 0.8rem;
  top: 50%;
  transform: translateY(-50%);
  color: #6c757d;
}

.btn-add {
  background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
  color: #fff;
  border: none;
  padding: 0.6rem 1.5rem;
  border-radius: 10px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-add:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
  color: #fff;
}

.custom-table {
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.custom-table thead {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
}

.custom-table thead th {
  color: #fff;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-size: 0.9rem;
  padding: 1.2rem 1rem;
  border: none;
}

.custom-table tbody tr {
  transition: all 0.3s ease;
  border-bottom: 1px solid #f1f3f5;
}

.custom-table tbody tr:hover {
  background: linear-gradient(90deg, rgba(30, 60, 114, 0.05) 0%, rgba(42, 82, 152, 0.05) 100%);
  transform: scale(1.01);
  box-shadow: 0 3px 10px rgba(30, 60, 114, 0.1);
}

.custom-table tbody td {
  padding: 1.2rem 1rem;
  vertical-align: middle;
  color: #495057;
  font-size: 0.95rem;
}

.skin-image {
  width: 100px;
  height: 60px;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
}

.skin-image:hover {
  transform: scale(1.1);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
}

.skin-name {
  color: #1e3c72;
  font-weight: 600;
  font-size: 1rem;
}

.skin-price {
  color: #28a745;
  font-weight: 700;
  font-size: 1.1rem;
}

.badge-id {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  padding: 0.4rem 0.8rem;
  border-radius: 8px;
  font-weight: 600;
  font-size: 0.9rem;
}

.action-buttons {
  display: flex;
  gap: 0.5rem;
  justify-content: center;
}

.btn-action {
  width: 35px;
  height: 35px;
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  border: none;
  font-size: 0.9rem;
}

.btn-edit {
  background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
  color: #fff;
}

.btn-edit:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
}

.btn-delete {
  background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
  color: #fff;
}

.btn-delete:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
}

.empty-state {
  text-align: center;
  padding: 3rem;
  color: #6c757d;
}

.empty-state-icon {
  font-size: 4rem;
  margin-bottom: 1rem;
}

@media (max-width: 768px) {
  .pengelolaan-wrapper {
    padding: 1.5rem 0;
  }
  
  .table-container {
    padding: 1rem;
  }
  
  .skin-image {
    width: 80px;
    height: 50px;
  }
  
  .custom-table thead th,
  .custom-table tbody td {
    padding: 0.8rem 0.5rem;
    font-size: 0.85rem;
  }
}
</style>

<div class="pengelolaan-wrapper">
  <div class="container">
    <div class="page-header">
      <h2>⚙️ CS2 Skins Management</h2>
    </div>

    <div class="table-container">
      <div class="table-actions">
        <div class="search-box">
          <span class="search-icon">🔍</span>
          <input type="text" class="form-control" placeholder="Search skins..." id="searchInput" onkeyup="searchSkins()">
        </div>
      </div>

      <div class="table-responsive">
        <table class="table custom-table align-middle text-center mb-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Skin Name</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($skins as $skin)
            <tr>
              <td>
                <span class="badge-id">{{ $skin['id'] }}</span>
              </td>
              <td>
                <img src="{{ $skin['image'] }}" alt="{{ $skin['nama'] }}" class="skin-image">
              </td>
              <td>
                <span class="skin-name">{{ $skin['nama'] }}</span>
              </td>
              <td>
                <span class="skin-price">{{ $skin['harga'] }}</span>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="4">
                <div class="empty-state">
                  <div class="empty-state-icon">📦</div>
                  <h5>No Skins Found</h5>
                  <p>Start by adding your first skin!</p>
                </div>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
function searchSkins() {
  let input = document.getElementById('searchInput');
  let filter = input.value.toUpperCase();
  let table = document.querySelector('.custom-table tbody');
  let tr = table.getElementsByTagName('tr');

  for (let i = 0; i < tr.length; i++) {
    let tdName = tr[i].getElementsByClassName('skin-name')[0];
    let tdPrice = tr[i].getElementsByClassName('skin-price')[0];
    
    if (tdName || tdPrice) {
      let txtName = tdName ? tdName.textContent || tdName.innerText : '';
      let txtPrice = tdPrice ? tdPrice.textContent || tdPrice.innerText : '';
      
      if (txtName.toUpperCase().indexOf(filter) > -1 || txtPrice.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = '';
      } else {
        tr[i].style.display = 'none';
      }
    }
  }
}
</script>
@endsection