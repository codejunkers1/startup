<HTML>
  <HEAD>
    <TITLE>Excel to HTML</TITLE>
    <STYLE TYPE="text/css">body div * { font-family: Verdana; font-weight: normal; font-size: 12px; } body { background-color: #E6E6FF; } .tableContainer table { border: 1px solid #000040; } .tblHeader { font-weight: bold; text-align: center; background-color: #000040; color: white; } .oddRow, .evenRow { vertical-align: top; } .tblHeader td, .oddRow td, .evenRow td { border-left: 1px solid #000040; border-bottom: 1px solid #000040; } .lastCol { border-right: 1px solid #000040; } .oddRow { background-color: #C6C6FF; } .evenRow { background-color: #8C8CFF; }</STYLE>
    <SCRIPT LANGUAGE="JavaScript">
      <!--
      function _ge(id) { return document.getElementById(id); }
      function _nc(val) { return (val != null && val.length > 0); }

      function convert2HTML() {
        var fo = _ge('txtFilePath');
        var so = _ge('txtSheetName');
        var ho = _ge('txtHeaderRowStart');
        var co = _ge('txtHeaderColStart');
        var hco = _ge('txtHeaderCols');
        var ro = _ge('txtDataRows');

        if(!(_nc(fo.value) && _nc(so.value) && _nc(ho.value) && _nc(co.value) && _nc(hco.value) && _nc(ro.value)) ) {
          alert('All the fields are mandatory.');
          return false;
        }

        var ex;
        try {
          ex = new ActiveXObject("Excel.Application");
        }
        catch (e)
        {
          alert('Your browser does not support the Activex object.\nPlease switch to Internet Explorer.');
          return false;
        }
        var ef = ex.Workbooks.Open(fo.value,true);
        var es = ex.Worksheets(so.value);
        var rs = parseInt(ho.value,10);
        var cs = parseInt(co.value,10);
        var ce = cs + parseInt(hco.value,10) - 1;
        var re = rs + parseInt(ro.value,10);

        var oc = _ge('tableContainer');
        oc.innerHTML = '';
        var tbl = document.createElement('TABLE');
        tbl.id = 'tblExcel2Html';
        tbl.border = '0';
        tbl.cellPadding = '4';
        tbl.cellSpacing = '0';
        oc.appendChild(tbl);
        var i,j,row,col,r,c;

        for(i = rs, r = 0; i <= re; i++,r++) {
          row = tbl.insertRow(r);
          row.className = (i == rs) ? 'tblHeader' : (i % 2 == 0) ? 'evenRow' : 'oddRow';
          for(j = cs, c = 0; j <= ce; j++,c++) {
            col = row.insertCell(c);
            col.className = (j == ce) ? 'lastCol' : '';
            col.innerHTML = es.Cells(i,j).value || ' ';

          }
        }
        _ge('btnGetSrc').style.display = '';
      }

      function toggleSrc() {
        if(_ge('tableContainer').style.display == '') {
          getHTMLSrc();
        }
        else {
          back2Table();
        }
      }

      function getHTMLSrc() {
        var oc = _ge('tableContainer');
        var tx = _ge('txtOutput');
        var so = document.getElementsByTagName('style');
        var str = '<html><body>' + oc.outerHTML + so[0].outerHTML + '</body></html>';
        tx.value = str;
        oc.style.display = 'none';
        _ge('divOutput').style.display = '';
      }

      function copy2Clipboard() {
        var tx = _ge('txtOutput');
        window.clipboardData.setData("Text",tx.value);
      }

      function resetFields() {
        window.location.reload();
      }

      function back2Table() {
        _ge('divOutput').style.display = 'none';
        _ge('btnGetSrc').style.display = '';
        _ge('tableContainer').style.display = '';
      }

      function numberOnly(obj) {
        obj.value = obj.value.replace(/[^0-9]*/,'');
      }
      //-->
    </SCRIPT>
  </HEAD>
  <BODY>
  <h2>Excel to HTML table conversion utility by Niral Soni</h2>
  <div id="ExcelDetails">
    <table border="0" width="100%">
    <tr>
      <td>Absolute Path of Excel file to read</td>
      <td>:</td>
      <td><INPUT TYPE="file" ID="txtFilePath" value=""></td>
      <td>ID of the Sheet to read</td>
      <td>:</td>
      <td><INPUT TYPE="text" ID="txtSheetName" value=""></td>
    </tr>
    <tr>
      <td>Header Row Start at</td>
      <td>:</td>
      <td><INPUT TYPE="text" ID="txtHeaderRowStart" value="" onblur="numberOnly(this)"></td>
      <td>Header Column Start at</td>
      <td>:</td>
      <td><INPUT TYPE="text" ID="txtHeaderColStart" value="" onblur="numberOnly(this)"></td>
    </tr>
    <tr>
      <td>Total Header Columns Count</td>
      <td>:</td>
      <td><INPUT TYPE="text" ID="txtHeaderCols" value="" onblur="numberOnly(this)"></td>
      <td>Total Data Rows Count</td>
      <td>:</td>
      <td><INPUT TYPE="text" ID="txtDataRows" value="" onblur="numberOnly(this)"></td>
    </tr>
    <tr>
      <td colspan="6" align="CENTER"><INPUT TYPE="button" VALUE="Convert to HTML" ONCLICK="convert2HTML()"></td>
    </tr>
    </table>
    <br>
  </br></div>
  <INPUT TYPE="button" VALUE="Toggle HTML View / Source" style="display: none;" id="btnGetSrc" ONCLICK="toggleSrc()">
  <br>
  <div id="divOutput" style="display: none; height: 50%;">
    <TEXTAREA ID="txtOutput" style="width:100%; height: 100%;"></TEXTAREA>
    <br>
    <center>
      <INPUT TYPE="button" VALUE="Copy to Clipboard" ONCLICK="copy2Clipboard()">
      <INPUT TYPE="button" VALUE="Reset All" ONCLICK="resetFields()">
    </center>
  </br></div>
  <div id="tableContainer"></div>
  </BODY>
</HTML>