<?php
$key = "License Key";
$pageTitle = "ag-Grid JavaScript Data Grid Set License Key";
$pageDescription = "How to set the License Key in ag-Grid Enterprise";
$pageKeyboards = "ag-Grid JavaScript Data Grid Excel License Key";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Set License</h2>

    <p>
        <?php include '../enterprise.php';?>
        &nbsp;
        Setting of License Key is required when using ag-Grid Enterprise.
    </p>

    <h3>Setting the License Key</h3>
    <p>The License Key is set via a static method - there are no server side checks involved.</p>

    <p>You can set the License Key via the following mechanisms, prior to initialising ag-Grid Enterprise:</p>

    <p>
        JavaScript:
        <pre>agGrid.LicenseManager.setLicenseKey("your license key");</pre>

        CommonJS:
        <pre>var enterprise = require("ag-grid-enterprise");
enterprise.LicenseManager.setLicenseKey("your license key");</pre>

        ECMA 6:
        <pre>import {LicenseManager} from "ag-grid-enterprise/main";
LicenseManager.setLicenseKey("your license key");</pre>

    </p>

    <note>For Aurelia users, we suggest you set your License Key in the <code>configure</code> function, as follows:
    <pre>
export function configure(aurelia: Aurelia) {
  aurelia.use
    .standardConfiguration()
    .plugin('ag-grid-aurelia')
    .feature('resources');

  // enterprise uncomment and set licence key here
  // LicenseManager.setLicenseKey('LICENSE KEY');

  ...rest of function</pre></note>

    <note>
        If you are distributing your product and including ag-Grid Enterprise, we realise that your license key will be
        visible to others. We appreciate that this is happening and just ask that you don't advertise it. Given our
        product is JavaScript, there is little we can do to prevent this.
    </note>
</div>

<?php include '../documentation-main/documentation_footer.php';?>
