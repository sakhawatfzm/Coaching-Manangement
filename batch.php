<!DOCTYPE html>
<html lang="en">
<head>
  <title>Batch list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
        body{
    margin-top:20px;
    background:#f8f8f8;
    }
  </style>
</head>
<body>
    <?php include 'a_navbar.php'?>
    <div class="container">
        <div class="col">
            <div class="e-tabs mb-3 px-3">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#"><b>Batch</b></a></li>
            </ul>
            </div>

            <div class="row flex-lg-nowrap">
            <div class="col mb-3">
                <div class="e-panel card">
                <div class="card-body">
                    <div class="e-table">
                    <div class="table-responsive table-lg mt-3">
                        <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Batch Name</th>
                                <th class="max-width align-middle text-center">Starting Time</th>
                                <th class="align-middle text-center">Status</th>
                                <th class="align-middle text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    Batch 35
                                </td>
                                <td class="align-middle text-center">
                                    10 January 2021
                                </td>
                                <td class="text-nowrap align-middle text-center"><span class="badge badge-danger">Inactive</span></td>  
                                <td class="text-center align-middle">
                                    <div class="btn-group align-top">
                                        <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                        <button class="btn btn-sm btn-danger badge" type="button" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    Batch 36
                                </td>
                                <td class="align-middle text-center">
                                    25 August 2021
                                </td>
                                <td class="text-nowrap align-middle text-center"><span class="badge badge-primary">Active</span></td>
                                <td class="text-center align-middle">
                                    <div class="btn-group align-top">
                                        <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                        <button class="btn btn-sm btn-danger badge" type="button" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    Batch 37
                                </td>
                                <td class="align-middle text-center">
                                    13 May 2022
                                </td>
                                <td class="text-nowrap align-middle text-center"><span class="badge badge-primary">Active</span></td>
                                <td class="text-center align-middle">
                                    <div class="btn-group align-top">
                                        <button class="btn btn-sm btn-secondary badge" type="button" data-toggle="modal" data-target="#edit">Edit</button>
                                        <button class="btn btn-sm btn-danger badge" type="button" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <!-- edit batch Modal -->
                        <div class="modal" tabindex="-1" id="edit">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Edit Batch</b></h4>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Batch Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Starting time(dd/mm/yyyy)</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="badge badge-info mt-3">Active</label>
                                            <input type="checkbox" class="form-check-input ml-3 mt-3" value="1">
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary mr-5">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- edit batch Modal end -->
                            
                        </table>
                        <!-- delate modal start -->
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" style="color: #FF0000;"><b>Delete Confirmation</b></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a button type="button" href="delete_category.php?id=" class="btn btn-danger">DELETE</a>
                                                </div>
                                                </div>
                                            </div>
                                             </div>
                            <!-- delate modal start-->
                    </div>
                    <div class="d-flex justify-content-center">
                        <ul class="pagination mt-3 mb-0">
                            <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                            <li class="active page-item"><a href="#" class="page-link">1</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">2</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">3</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">4</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">5</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">›</a></li>
                            <li class="disabled page-item"><a href="#" class="page-link">»</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-3">
                <div class="card">
                <div class="card-body">
                    <div class="text-center px-xl-3">
                        <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#batch">Add new Batch</button>
                    </div>
                    <!--add batch Modal -->
                        <div class="modal" id="batch">
                            <div class="modal modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><b>Add new Batch</b></h4>
                                </div>        
                                    <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Batch Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Starting time(dd/mm/yyyy)</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="badge badge-info mt-3">Active</label>
                                            <input type="checkbox" class="form-check-input ml-3 mt-3" value="1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary mr-5">Add</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">
                    <div class="e-navlist e-navlist--active-bold">
                    <ul class="nav">
                        <li class="nav-item active"><a href="" class="nav-link"><span>All</span>&nbsp;<small>/&nbsp;32</small></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span>Active</span>&nbsp;<small>/&nbsp;16</small></a></li>
                        <li class="nav-item"><a href="" class="nav-link"><span>Selected</span>&nbsp;<small>/&nbsp;0</small></a></li>
                    </ul>
                    </div>
                    <hr class="my-3">
                    <div>
                    <div class="form-group">
                        <label>Search by Name:</label>
                        <div><input class="form-control w-100" type="text" placeholder="Name" value=""></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

                
        </div>
        </div>
    </div>
</body>
</html>
