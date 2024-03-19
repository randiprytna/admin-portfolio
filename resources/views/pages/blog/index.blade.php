@extends('layouts.main', [
    'menuActive' => 'blog'
])

@section('before-head-end')
    <link rel="stylesheet" href="{{ asset('css/data-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dt-global-light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dt-custom-light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dt-global-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dt-custom-dark.css') }}">
@endsection

@section('content')
    <div class="middle-content container-xxl p-0">
        <div class="page-meta">
            <h1>Blog</h1>
        </div>
        <div class="page-meta d-flex justify-content-between">
            <nav class="breadcrumb-style-one align-self-center" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <button class="btn btn-primary d-flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                <p class="text-white mb-0">Add Blog</p>
            </button>
        </div>
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <table id="blog" class="table style-3">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th class="dt-no-sorting">Action</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('before-body-end')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/data-table.js') }}"></script>
    
    <script>
        $('#blog').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>><'table-responsive'tr><'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_ (with total _TOTAL_ total data entries)",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "pageLength": 10,
            "lengthMenu": [[5, 10, 20, 50, 100, -1], [5, 10, 20, 50, 100, 'All']],
            "ajax":{
                url: "{{ route('blog.data-table') }}",
                type: "GET"
            },
            columnDefs: [
                {
                    "targets": 0,
                    "render": function(data, type, row, meta){
                        return row.id;
                    }
                },
                {
                    "targets": 1,
                    "orderable": false,
                    "render": function(data, type, row, meta){
                        return `<ul class="table-controls">
                                    <li>
                                        <a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                                    </li>
                                </ul>`;
                    }
                },
                {
                    "targets": 2,
                    "render": function(data, type, row, meta){
                        return row.title;
                    }
                },
                {
                    "targets": 3,
                    "render": function(data, type, row, meta){
                        return row.slug;
                    }
                },
                {
                    "targets": 4,
                    "render": function(data, type, row, meta){
                        return row.description;
                    }
                },
                {
                    "targets": 5,
                    "render": function(data, type, row, meta){
                        return `<div class="d-flex gap-2">
                                    <div class="usr-img-frame mr-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{ asset('img/profile-blank.png') }}">
                                    </div>
                                    <p class="align-self-center mb-0">${row.author}</p>
                                </div>`;
                    }
                },
                {
                    "targets": 6,
                    "render": function(data, type, row, meta){
                        return row.category;
                    }
                },
                {
                    "targets": 7,
                    "render": function(data, type, row, meta){
                        var tagsHtml = '';
                        row.tags.forEach(function(tag, index) {
                            if (index === row.tags.length - 1 && tag.startsWith('+')) {
                                tagsHtml += `<span>${tag}</span>&nbsp;`;
                            } else {
                                tagsHtml += `<span class="badge badge-primary">${tag}</span>&nbsp;`;
                            }
                        });
                        return tagsHtml;
                    }
                },
                {
                    "targets": 8,
                    "render": function(data, type, row, meta){
                        if (row.status === 'publish') {
                            status = `<span class="badge badge-success">Publish</span>`;
                        } else {
                            status = `<span class="badge badge-danger">Draft</span>`;
                        }
                        return status;
                    }
                },
            ]
        });
    </script>
@endsection