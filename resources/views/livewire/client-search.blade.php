<div>
    <form action="/digital/cyber/register_user_form" method="POST" wire:submit.prevent="submit">
        @csrf
    <div class="form-data">
        <div class="row">
            <div class="col-45">
                <label class="label" for="Mobile_No">Mobile Number</label>

            </div>
            <div class="col-45">
                <div class="md-form">
                    <input type="number" id="Mobile_No" name="Mobile_No" class="form-control"
                        placeholder="Phone Number" wire:model.debounce.500ms="Mobile_No" onkeydown="mobile(this)"  />
                        @error('Mobile_No') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
    @if (session('SuccessMsg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('SuccessMsg')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if ($SearchResult->total()<=1)
    <div class="form-data-container">
        <div class="form-data">

                {{--  --}}
            <!-- Name -->
            <div class="row">
                <div class="col-45">
                    <label class="label" for="Name">Name</label> <span class="important">*</span>
                </div>
                <div class="col-55">
                    <div class="md-form">
                        <input type="text" id="Name" name="Name" class="form-control"
                            placeholder="Applicant Name"  wire:model="name" />
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <!-- DOB -->
            <div class="row">
                <!-- Material input -->
                <div class="col-45">
                    <label for="DOB">DOB</label> <span class="important">*</span>
                </div>
                <div class="col-55">
                    <div class="md-form">
                        <input type="date" id="DOB" name="DOB" class="form-control" wire:model="dob">
                        @error('dob') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="row">
                <!-- Material input -->
                <div class="col-45">
                    <label for="Address">Address</label> <span class="important">*</span>
                </div>
                <div class="col-55">
                    <div class="md-form">
                        <textarea type="number" id="Address" name="Address" class="form-control"
                            placeholder="Address" wire:model="address" ></textarea>
                            @error('address') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>


            <div class="form-data-buttons">
                <!-- Submitt Buttom -->
                <div class="row">
                    <div class="col-100">
                        <button type="submit" value="submit" name="submit"
                            class="btn btn-primary btn-rounded btn-sm">Register </button>
                        <a href="{{ url('cancel') }}" class="btn btn-rounded btn-sm">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-data">
            <div class="right-menu">
                <p class="heading2">Client Insight</p>
                <div class="form-insight-section">
                    <img src="\digital/cyber/photo_gallery\insight.jpg" alt="" >
                    <div class="form-sec-data">
                        <p class="section-heading">Registered Clients</p>
                        <p class="section-value">Total</p>
                        <p class="section-pre-values">Yesterday<span></span></p>
                    </div>
                </div>
                <div class="form-insight-section" >
                    <img src="\digital/cyber/photo_gallery\insight-2.png" alt="" >
                    <div class="form-sec-data">
                        <p class="section-heading">Reveniue From  Registered Clients</p>
                        <p class="section-value"></p>
                        <p class="section-value"> Yesterday &#x20B9; <span style="color:green"></span>/-</p>
                    </div>
                </div>
                <div class="form-insight-section" >
                    <img src="\digital/cyber/photo_gallery\insight-3.png" alt="" >
                    <div class="form-sec-data">
                        <p class="section-heading">UnRegistered Clients</p>
                        <p class="section-value"><span style="color:red"></span>Revenue from Unregistered Clients</p>
                        <p class="section-pre-values">Yesterday Earned &#x20B9; <span></span> By </p>

                    </div>
                </div>
            </div>

        </div>

    </div>

    </form>
    @endif


    @if (count($SearchResult)>=1)
    <div class="table-container">
        <div class="row">
            <div class="col-45">
                <a href="" class="label">Total Applications Found are :{{$SearchResult->total()}}</a>
            </div>

        </div>
        <table>
            <thead>
                <tr>
                    <th >Sl.No</th>
                    <th >Client_Id</th>
                    <th>Name</th>
                    <th>Application</th>
                    <th>Mobile No</th>
                    <th>Amount &#x20B9;</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($SearchResult as $data)
                <tr>
                    <td class="show">{{ $n++ }}</td>
                    <td class="show">{{ $data->Client_Id }}</td>
                    <td class="show">{{ $data->Name }}</td>
                    <td class="show">{{ $data->Application_Type }}</td>
                    <td class="show">{{ $data->Mobile_No }}</td>
                    <td class="show">{{ $data->Amount_Paid }}</td>
                    <td class="show">
                        <a class="btn btn-sm btn-success " wire:click.prevent ="Register('{{ $data->Client_Id }}')"
                            onclick="confirm('Are you sure you want to Register this Client Permanently?') || event.stopImmediatePropagation()"href='#'>Register</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$SearchResult->links()}}
    </div>
    @endif
</div>
