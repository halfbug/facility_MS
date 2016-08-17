<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Untitled Page</title>
    <style type="text/css">
        .style1
        {
            width: 100%;
        }
        .style2
        {
            text-align: right;
        }
        .style3
        {
            font-size: small;
        }
        .style4
        {
            font-size: small;
            color: #666666;
        }
        .style5
        {
            color: #999999;
            text-decoration: underline;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            width:300px;
        }
        .style6
        {
            border: 1px solid black;
        }
        .style7
        {
            height: 21px;border: 1px solid black;
        }
        .style8
        {
            width: 137px;border: 1px solid black;
        }
        .style9
        {
            width: 195px;
            height: 21px;
            border: 1px solid black;
        }
         
    </style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif">

    
    <table class="style1">
        <tr>
            <td>
                <img alt="logo" src="{{ URL::asset('images/pacs_logo.png') }}"  /></td>
            <td class="style5">
                <strong>Premier Aged Care Service</strong></td>
            <td class="style2">
                <span class="style4">PO Box 444 Carnegie Vic 3163</span><br class="style4" />
                <span class="style4">03 9573 3277</span><br class="style4" />
                <span class="style4">03 9571 8196</span><br />
                <a href="mailto:enquiry@premieragecare.au"><span class="style3">
                enquiry@premieragecare.au</span></a>
            </td>
        </tr>
    </table>
    <hr />

    
    <br />
    <br />
    &nbsp;

    <table style="border-collapse: collapse; width:100%; border: 1px solid black;" class="table2">
        <tr style="border: 1px solid black;">
            <td style="background-color:silver" colspan="3" bgcolor="Silver">
                <strong>Consumers Details</strong></td>
        </tr>
        <tr>
            <td class="style9">
                Name (You)</td>
            <td class="style7" colspan="2">
                {{$old->title}} {{$old->first_name}} {{$old->last_name}}</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                Home</td>
            <td class="style8">
                &nbsp;</td>
            <td class="style6">
                &nbsp;</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                Contact Details</td>
            <td class="style8">
                Mailing Address</td>
            <td class="style6">
                {{$old->h_address}} {{$old->h_suburb}} {{$old->h_state}} {{$old->h_postcode}}</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                &nbsp;</td>
            <td class="style8">
                Phone</td>
            <td class="style6">
                {{$old->h_phone}}</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                &nbsp;</td>
            <td class="style8">
                Email</td>
            <td class="style6">
                {{$old->h_email}} </td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                Date of Birth</td>
            <td class="style8">
                Birthdate</td>
            <td class="style6">
                 {{ $old->date_of_birth==='0000-00-00' ? "":$old->date_of_birth }}
            </td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6" colspan="3">
                &nbsp;</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6" colspan="3">
                &nbsp;</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                Your General Practitioner</td>
            <td class="style8">
                Full Name</td>
            <td class="style6">
                {{$old->gp_fullname}} </td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                &nbsp;</td>
            <td class="style8">
                Address</td>
            <td class="style6">
                {{$old->gp_address}} {{$old->gp_suburb}} {{$old->gp_state}} {{$old->gp_postcode}}</td>
        </tr>
        <tr style="border: 1px solid black;">
            <td class="style6">
                &nbsp;</td>
            <td class="style8">
                Phone Number(s)</td>
            <td class="style6">
                {{$old->gp_phone_1}} {{$old->gp_phone_2}}</td>
        </tr>
    </table>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    &nbsp;

    <table style="width:100%">
    
    <tr>
    <td style="width:50px;"> &nbsp; </td>
    <td style="width:200px;"> __________________  </td>
    <td style="width:200px;"> &nbsp; </td>
    <td style="width:200px;"> ___________________ </td>
    <td style="width:50px;"> &nbsp; </td>
    </tr>

    <tr>
    <td style="width:50px;"> &nbsp; </td>
    <td style="width:200px;"> Consumer Signature  </td>
    <td style="width:200px;"> &nbsp; </td>
    <td style="width:200px;"> Practitioner Signature </td>
    <td style="width:50px;"> &nbsp; </td>
    </tr>

   
    </table>


</body>
</html>
