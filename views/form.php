<div class="content senary" id="vipsignup">
        <h3>Fill out the form below!</h3>
    <form action="index.php" method="post"  id="appForm" enctype="multipart/form-data">
    <input type="hidden" name="controller" value="vip"/>
    <input type="hidden" name="action" value="addVIP"/>
    <input type="hidden" name="id" value=""/>
    
        <div class="fieldgroup required">
            <label>First Name&#x2a;</label>
            <input type="text" name="strFirstName" value=""/>
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>
        <div class="fieldgroup required">
            <label>Last Name&#x2a;</label>
            <input type="text" name="strLastName" value=""/>
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>
        <div class="fieldgroup required">
            <label>Email&#x2a;</label>
            <input type="text" name="strEmail" value=""/>
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>
        <div class="fieldgroup required">
            <label>Phone&#x2a;</label>
            <input type="text" name="strPhone" value=""/>
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>
        <div class="fieldgroup required">
            <label>Country&#x2a;</label>
            <input type="text" name="strCountry" value=""/>
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>
        <div class="fieldgroup required">
            <label>Age&#x2a;</label>
            <input type="text" name="intAge" value=""/>
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>

        <div class="fieldgroup required">
            <label>Upload Image</labeL>
            <input type="file" name="strFileName" id="strFileName">
            <div class="attention">
                <p>You forgot a field!</p>
            </div>
        </div>
        
        <div class="fieldgroup" id="sbmt">
            <input type="submit" value="join the club" name="submit">
        </div>
    </form> <!--form-->
 </div> <!--.senary-->