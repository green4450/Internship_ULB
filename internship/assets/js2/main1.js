function modal(){
$('#myModal').modal('show');
// www.jquery3dotnet.com

$("#role" ).change(function() {
    var value = $("#role").val();
    $("#registeras").html(value);
    if (value == "UNIVERSITIY/COLLEGE") {
        $("#Registration").html(`
        <form role="form" class="form-horizontal">
            
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">
                    College Name</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">
                    College Unique Number</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                    College LOGO</label>
                <div class="col-sm-9">
                    <input type="file" name="organization" id="organization" class="form-control mb-4" placeholder="University Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    College Website</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    TPO First Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    TPO Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    TPO Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    TPO Contact</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    TPO ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>


        
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <button name="college-register" id="college-register" type="button" class="btn btn-primary btn">
                        Register</button>
                    
                </div>
            </div>
        </form>
        `);
    } else if (value == "EMPLOYER(DM,PSU,OTHER)") {
        $("#Registration").html(`
        <form role="form" class="form-horizontal">
            
            <div class="form-group">
                <label class="col-sm-3 control-label" for="meetingPlace">Type of Employer: </label>
                <div class="col-sm-9">
                <select class="form-control" id="type">
                    <option value="Corporate" selected>Corporate</option>
                    <option value="District Megistrate">District Megistrate</option>
                    <option value="NASCOM">NASCOM</option>
                    <option value="AGGREGATOR">AGGREGATOR</option>
                    <option value="SECTOR SKILL COUNCIL">SECTOR SKILL COUNCIL</option>
                    <option value="ASSOCHAM">ASSOCHAM</option>
                    <option value="PUBLIC SECTOR UNIT">PUBLIC SECTOR UNIT</option>
                    <option value="GOVERNMENT DEPARTMENT">GOVERNMENT DEPARTMENT</option>
                    <option value="NON GOVERNMENTAL ORGANISATION">NON GOVERNMENTAL ORGANISATION</option>
                    <option value="CII">CII</option>
                    <option value="FICCI">FICCI</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">
                    Organization </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>
            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                First Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                Last Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    Email </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                Password </label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                Company Unique</label>
                <div class="col-sm-9">
                <select name="corporatelist" id="corporatelist"
                class="form-control">
                    <option value="" selected>Select</option>
                    <option value="TIN" selected>TIN</option>
                    <option value="GST">GST</option>
                    <option value="ROC">ROC</option>
                    <option value="CIN">CIN</option>
                    <option value="Association Registration">Association Registration</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                Id Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                Conatct Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password" placeholder="" />
                </div>
            </div>

        
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <button name="dm-register" id="dm-register" type="button" class="btn btn-primary btn">
                        Register</button>
                    
                </div>
            </div>
        </form>
        `);
    } else if (value == "GOVERNMENT AGENCY") {
        $("#Registration").html(`
            
        `);
    } else if (value == "STUDENT") {
        $("#Registration").html(`
        <form role="form" class="form-horizontal">
       
            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                First Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                Last Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                State</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                City</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-3 control-label">
                Contact Number</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="" />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <button type="button" name="student-register" id="student-register" class="btn btn-primary btn">
                        Register</button>
                    
                </div>
            </div>
        </form>
        `);
    }  
});
}