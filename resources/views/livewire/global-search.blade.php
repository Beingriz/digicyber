<div>
    <div >
        <div class="form-header">
            <p class="heading">Details  for {{$search}} </p>
        </div>



        @if (($Search_Count) ==0)
        <div class="header" style="text-align:center">
        <span class="info-text">Sorry No Service Record Available for {{$search}}</span>
        </div>
        <br>
        @elseif (count($Registered)==0)
        <div class="header" style="text-align:center">
            <span class="info-text">Unregistered Client!. Please Register..</span>
        </div>
            <br>
        @endif
        @if (session('SuccessMsg'))
        <span class="success">{{session('SuccessMsg')}}</span>
        @endif
        @if (count($Registered)>0)
            <div class="" style="text-align:center">
            <br>
            @if ($Registered_Count>1)
            <span class="info-text">{{$Registered_Count}} Registered Clients Available for Search Result of :</span><span class="heading"> {{$search}}</span><br>
            @endif
            <span class="heading2">Registered Client  {{($Name)}}</span>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>DOB</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Registered as $item)
                    <tr>
                        <td style="width:10%">{{$item['Id']}}</td>
                        <td style="width:20%">{{$item['Name']}}</td>
                        <td style="width:10%">{{$item['Mobile_No']}}</td>
                        <td style="width:25%">{{$item['Address']}}</td>
                        <td style="width:20%">{{$item['DOB']}}</td>
                        <td style="width:25%">{{$item['Client_Type']}}</td>
                        <td style="width:10%">
                            <a class="btn-sm btn-primary"  style = "color: white">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row"></div>
        </div>
        @endif
        @if ($Search_Count>0)
        <div class="header"  style="text-align: center">
            <span class="info-text">{{$Search_Count}} Search Result Found</span>
        </div>

        <div class="dashboard-insight" >
            <div class="right-menu-section" style="width: 200px">
                <img src="\digital/cyber/photo_gallery\insight.jpg" alt="" >
                <div class="sec-data">
                    <p class="section-heading">Services Count</p>
                    <p class="section-value">{{$Service_Count}}</p>
                    <p class="section-pre-values">Sevices Availed</p>
                </div>
            </div>
            <div class="right-menu-section" style="width: 200px">
                <img src="\digital/cyber/photo_gallery\insight.jpg" alt="" >
                <div class="sec-data">
                    <p class="section-heading">Penidng Applications</p>
                    <p class="section-value">{{$Pending_App}}</p>
                    <p class="section-pre-values">Under Process</p>
                </div>
            </div>
            <div class="right-menu-section" style="width: 200px">
                <img src="\digital/cyber/photo_gallery\insight.jpg" alt="" >
                <div class="sec-data">
                    <p class="section-heading">Delivered</p>
                    <p class="section-value">{{$Delivered}}</p>
                    <p class="section-pre-values">Received by Clinet</p>
                </div>
            </div>

            <div class="right-menu-section" style="width: 200px">
                <img src="\digital/cyber/photo_gallery\insight.jpg" alt="" >
                <div class="sec-data">
                    <p class="section-heading">Revenue </p>
                    <p class="section-value">{{$Revenue}}</p>
                    <p class="section-pre-values">Income Received</span></p>
                </div>
            </div>
            <div class="right-menu-section" style="width: 200px">
                <img src="\digital/cyber/photo_gallery\insight.jpg" alt="" >
                <div class="sec-data">
                    <p class="section-heading">Balance Due</p>
                    <p class="section-value">{{$Balance}}</p>
                    <p class="section-pre-values">Yet to Recover</span></p>
                </div>
            </div>
        </div>



        <div class="filter-bar">
            <div class="d-flex justify-content-between align-content-center mb-2">
                <div class="d-flex">
                    <div>
                        <div class="d-flex align-items-center ml-4">
                            @if ($Checked)
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group btn-group-sm btn-rounded" role="group">
                                    <button id="btnGroupDrop1" type="button"
                                        class="btn btn-danger btn-sm dropdown-toggle" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        Cheched ({{count($Checked)}})
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class=" dropdown-item" onclick="confirm('Are you sure you want to Move these records to Recycle Bin?') || event.stopImmediatePropagation()" wire:click="MultipleDelete()">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row"></div>
                            @endif
                            <label for="paginate" class="text-nowrap mr-2 mb-0">Per Page</label>
                            <select wire:model="paginate" name="paginate" id="paginate" class="form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                            <div class="row"></div>
                            <label for="filterby" class="text-nowrap mr-2 mb-0">Sort By</label>
                            <input  type="text"  wire:model="filterby" class="form-control form-control-sm" placeholder="Filter">
                            <div class="row"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"></div>
        @if (count($Balance_Collection)>0)
        <div class="form-header">
            <table>
                <thead class="balance-header">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Total</th>
                        <th>Amount Paid</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Balance_Collection as $item)
                    <tr>
                        <td style="width:10%">{{$item['Id']}}</td>
                        <td style="width:40%">{{$item['Description']}}</td>
                        <td style="width:10%">&#x20B9; {{$item['Total_Amount']}}</td>
                        <td style="width:10%">&#x20B9; {{$item['Amount_Paid']}}</td>
                        <td style="width:10%">&#x20B9; {{$item['Balance']}}</td>
                        <td style="width:20%">
                            <a  href="#" onclick="confirm('Do you Want to Clear the Balance of &#x20B9;{{$item['Balance']}}? ') || event.stopImmediatePropagation()" wire:click.prevent="ClearBalanceDue('{{$item['Id']}}','{{$item['Client_Id']}}')" >Clear Balance</a>
                            <br>
                            <a  href="#" wire:click.prevent="MoveRecycle('{{$item['Id']}}','{{$item['Client_Id']}}')" >Move to Recycle</a>
                        </td>
                    </tr>
                    @endforeach
                    <div class="header" style="text-align:center">
                        <span class="important"> Balance Due Found for This ID : {{$item->Id}} Records!. Total Balance Due : &#x20B9;{{$Balance_Collection->sum('Balance') }}</span>
                    </div>
            </table>
        </div>
        <div class="row"></div>
        <br>
        @endif
            @if (session('Error'))
            <span class="error">{{session('Error')}}</span>
            @endif

            @foreach($search_data as $data)
            @endforeach
        <table >
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Check</th>
                    <th class="hide">Received</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th class="hide">Application</th>
                    <th class="hide">Services</th>
                    <th>Ref No</th>
                    <th class="hide">Document</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($search_data as $data)
            <tbody @if ($data->Registered == 'No')  style="background-color: #f5f8fc"   @endif>
                @while (($search_data->total())>0)
                <tr>
                    <td class="show">
                        {{ $n++ }}
                        @if(($search_data->total())==($search_data->total()))
                        @break
                        @endif
                    </td>
                    @endwhile
                    <td><input type="checkbox" name="checked" id="checked" value="{{$data->Id}}" wire:model="Checked"></td>

                    <td class="hide">{{ $data->Received_Date }}</td>
                    <td class="hide">{{ $data->Name }}</td>
                    <td class="show">{{ $data->Mobile_No }}</td>
                    <td class="hide">{{ $data->Application}}</td>
                    <td class="hide">{{$data->Application_Type}}</td>
                    <td class="show">{{ $data->Ack_No }}</td>
                    <td class="show">{{ $data->Document_No }}</td>
                    <td class="show">{{ $data->Status }}</td>
                    <td class="show">
                        <div class="btn-group" role="group"
                            aria-label="Button group with nested dropdown">
                            <div class="btn-group btn-group-sm " role="group">
                                <button id="btnGroupDrop2" type="button"
                                    class="btn btn-info dropdown-toggle" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    @if ($data->Registered == 'No')
                                    Register
                                    @elseif($data->Registered == 'Yes')
                                    Edit
                                    @endif
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                    <li><a class="dropdown-item "
                                            href='/digital/cyber/open_app/{{ $data->Id }}'>Open</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href='/digital/cyber/edit_app/{{ $data->Id }}'>Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" onclick="confirm('Are you sure you want Move  {{$data->Name}}  Application to Recycle Bin?') || event.stopImmediatePropagation()" wire:click="SingleDelete('{{$data->Id}}','{{$data->Client_Id}}')"
                                           >Delete</a>
                                    </li>
                                    @if ($data->Registered == 'No')
                                    <li><a class="dropdown-item" onclick="confirm('Are you sure you want Register. Mr /Mrs : {{$data->Name}} , for  Mobile No : {{$data->Mobile_No}} ?') || event.stopImmediatePropagation()" wire:click="Register('{{$data->Id}}')" >Register</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
        @endif
        <span>{{ $search_data->links() }}</span>
    </div>

</div>
