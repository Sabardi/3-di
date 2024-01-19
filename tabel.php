<?php
include "database.php";
include "navbar.php";
include "sidebar.php";
?>
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                                            
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Country</th>
                                <th scope="col">ZIP</th>
                                
                                <th scope="col">Status</th>
                            </tr>
                        
                        </thead>
                        <tbody>
                        
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>jhon@email.com</td>
                                <td>USA</td>
                                <td>123</td>
                                <td>Member</td>
                            </tr>
        
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
<?php
include "footer.php";