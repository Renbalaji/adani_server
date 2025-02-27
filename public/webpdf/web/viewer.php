<?php
session_start();
$base_url="http://".$_SERVER['SERVER_NAME']."/cmsmvc";
define('BASE_URL', $base_url);
 ?>
<!DOCTYPE html>
<!--
Copyright 2012 Mozilla Foundation

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
<html dir="ltr" mozdisallowselectionprint moznomarginboxes>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>PDF.js viewer</title>
<script>var DEFAULT_URL2= "<?php echo $id=BASE_URL."/public/".$_REQUEST['id']; //echo $_SESSION[$id]; ?>";</script>
<!--#if FIREFOX || MOZCENTRAL-->
<!--#include viewer-snippet-firefox-extension.html-->
<!--#endif-->

    <link rel="stylesheet" href="viewer.css"/>
<!--#if !PRODUCTION-->
    <link rel="resource" type="application/l10n" href="locale/locale.properties"/>
<!--#endif-->

<!--#if !(FIREFOX || MOZCENTRAL || CHROME)-->
    <script type="text/javascript" src="compatibility.js"></script>
<!--#endif-->

<!--#if !PRODUCTION-->
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/external/webL10n/l10n.js"></script>
<!--#endif-->

<!--#if !PRODUCTION-->
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/network.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/chunked_stream.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/pdf_manager.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/core.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/util.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/api.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/metadata.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/canvas.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/obj.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/function.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/charsets.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/cidmaps.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/colorspace.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/crypto.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/evaluator.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/fonts.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/glyphlist.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/image.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/metrics.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/parser.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/pattern.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/stream.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/worker.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/shortcut.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/external/jpgjs/jpg.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/jpx.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/jbig2.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/public/webpdf/src/bidi.js"></script>
    <script type="text/javascript">PDFJS.workerSrc = '<?php echo BASE_URL;?>/public/webpdf/src/worker_loader.js';</script>
<!--#endif-->

<!--#if GENERIC || CHROME-->
<!--#include viewer-snippet.html-->
<!--#endif-->

    <script type="text/javascript" src="debugger.js"></script>
    <script type="text/javascript" src="viewer.js"></script>
 <script>    for(var i=65;i<=90;i++){
		var aa=String.fromCharCode(i);
		//alert(aa);

   
	shortcut.add("Ctrl+"+aa,function() {

//alert("Hi there!");

},{

'type':'keydown',

'propagate':false,

'target':document

});
	 }
shortcut.add("Shift+down",function() {

//alert("Hi there!");

},{

'type':'keydown',

'propagate':false,

'target':document

});
	//shortcut.remove("Ctrl+A");
function killCopy(e){
    return false
}
 
function reEnable(){
    return true
}
 
document.onselectstart=new Function ("return false")
if (window.sidebar){
	//
    document.onmousedown=killCopy
    document.onclick=reEnable
}
</script>
  </head>

  <body tabindex="1" ondragstart="return false" onselectstart="return false" oncontextmenu="return false;">
    <div id="outerContainer" class="loadingInProgress">

      <div id="sidebarContainer">
        <div id="toolbarSidebar">
          <div class="splitToolbarButton toggled">
            <button id="viewThumbnail" class="toolbarButton group toggled" title="Show Thumbnails" tabindex="2" data-l10n-id="thumbs">
               <span data-l10n-id="thumbs_label">Thumbnails</span>
            </button>
            <button id="viewOutline" class="toolbarButton group" title="Show Document Outline" tabindex="3" data-l10n-id="outline">
               <span data-l10n-id="outline_label">Document Outline</span>
            </button>
          </div>
        </div>
        <div id="sidebarContent">
          <div id="thumbnailView">
          </div>
          <div id="outlineView" class="hidden">
          </div>
        </div>
      </div>  <!-- sidebarContainer -->

      <div id="mainContainer">
        <div class="findbar hidden doorHanger hiddenSmallView" id="findbar">
          <label for="findInput" class="toolbarLabel" data-l10n-id="find_label">Find:</label>
          <input id="findInput" class="toolbarField" tabindex="21">
          <div class="splitToolbarButton">
            <button class="toolbarButton findPrevious" title="" id="findPrevious" tabindex="22" data-l10n-id="find_previous">
              <span data-l10n-id="find_previous_label">Previous</span>
            </button>
            <div class="splitToolbarButtonSeparator"></div>
            <button class="toolbarButton findNext" title="" id="findNext" tabindex="23" data-l10n-id="find_next">
              <span data-l10n-id="find_next_label">Next</span>
            </button>
          </div>
          <input type="checkbox" id="findHighlightAll" class="toolbarField">
          <label for="findHighlightAll" class="toolbarLabel" tabindex="24" data-l10n-id="find_highlight">Highlight all</label>
          <input type="checkbox" id="findMatchCase" class="toolbarField">
          <label for="findMatchCase" class="toolbarLabel" tabindex="25" data-l10n-id="find_match_case_label">Match case</label>
          <span id="findMsg" class="toolbarLabel"></span>
        </div>
        <div class="toolbar">
          <div id="toolbarContainer">
            <div id="toolbarViewer">
              <div id="toolbarViewerLeft">
                <button id="sidebarToggle" class="toolbarButton" title="Toggle Sidebar" tabindex="4" data-l10n-id="toggle_sidebar">
                  <span data-l10n-id="toggle_sidebar_label">Toggle Sidebar</span>
                </button>
                <div class="toolbarButtonSpacer"></div>
                <button id="viewFind" class="toolbarButton group hiddenSmallView" title="Find in Document" tabindex="5" data-l10n-id="findbar">
                   <span data-l10n-id="findbar_label">Find</span>
                </button>
                <div class="splitToolbarButton">
                  <button class="toolbarButton pageUp" title="Previous Page" id="previous" tabindex="6" data-l10n-id="previous">
                    <span data-l10n-id="previous_label">Previous</span>
                  </button>
                  <div class="splitToolbarButtonSeparator"></div>
                  <button class="toolbarButton pageDown" title="Next Page" id="next" tabindex="7" data-l10n-id="next">
                    <span data-l10n-id="next_label">Next</span>
                  </button>
                </div>
                <label id="pageNumberLabel" class="toolbarLabel" for="pageNumber" data-l10n-id="page_label">Page: </label>
                <input type="number" id="pageNumber" class="toolbarField pageNumber" value="1" size="4" min="1" tabindex="8">
                </input>
                <span id="numPages" class="toolbarLabel"></span>
              </div>
              <div id="toolbarViewerRight">
                <input id="fileInput" class="fileInput" type="file" oncontextmenu="return false;" style="visibility: hidden; position: fixed; right: 0; top: 0" />

                <button id="presentationMode" class="toolbarButton presentationMode hiddenSmallView" title="Switch to Presentation Mode" tabindex="12" data-l10n-id="presentation_mode">
                  <span data-l10n-id="presentation_mode_label">Presentation Mode</span>
                </button>

                <button id="openFile" class="toolbarButton openFile hiddenSmallView" title="Open File" tabindex="13" data-l10n-id="open_file">
                   <span data-l10n-id="open_file_label">Open</span>
                </button>

              <!--  <button id="print" class="toolbarButton print" title="Print" tabindex="14" data-l10n-id="print">
                  <span data-l10n-id="print_label">Print</span>
                </button>-->

                <!--<button id="download" class="toolbarButton download" title="Download" tabindex="15" data-l10n-id="download">
                  <span data-l10n-id="download_label">Download</span>
                </button>-->
                <!-- <div class="toolbarButtonSpacer"></div> -->
                <!--<a href="#" id="viewBookmark" class="toolbarButton bookmark hiddenSmallView" title="Current view (copy or open in new window)" tabindex="16" data-l10n-id="bookmark"><span data-l10n-id="bookmark_label">Current View</span></a>-->
              </div>
              <div class="outerCenter">
                <div class="innerCenter" id="toolbarViewerMiddle">
                  <div class="splitToolbarButton">
                    <button id="zoomOut" class="toolbarButton zoomOut" title="Zoom Out" tabindex="9" data-l10n-id="zoom_out">
                      <span data-l10n-id="zoom_out_label">Zoom Out</span>
                    </button>
                    <div class="splitToolbarButtonSeparator"></div>
                    <button id="zoomIn" class="toolbarButton zoomIn" title="Zoom In" tabindex="10" data-l10n-id="zoom_in">
                      <span data-l10n-id="zoom_in_label">Zoom In</span>
                     </button>
                  </div>
                  <span id="scaleSelectContainer" class="dropdownToolbarButton">
                     <select id="scaleSelect" title="Zoom" oncontextmenu="return false;" tabindex="11" data-l10n-id="zoom">
                      <option id="pageAutoOption" value="auto" selected="selected" data-l10n-id="page_scale_auto">Automatic Zoom</option>
                      <option id="pageActualOption" value="page-actual" data-l10n-id="page_scale_actual">Actual Size</option>
                      <option id="pageFitOption" value="page-fit" data-l10n-id="page_scale_fit">Fit Page</option>
                      <option id="pageWidthOption" value="page-width" data-l10n-id="page_scale_width">Full Width</option>
                      <option id="customScaleOption" value="custom"></option>
                      <option value="0.5">50%</option>
                      <option value="0.75">75%</option>
                      <option value="1">100%</option>
                      <option value="1.25">125%</option>
                      <option value="1.5">150%</option>
                      <option value="2">200%</option>
                    </select>
                  </span>
                </div>
              </div>
            </div>
            <div id="loadingBar">
              <div class="progress">
                <div class="glimmer">
                </div>
              </div>
            </div>
          </div>
        </div>

        <menu type="context" id="viewerContextMenu">
          <menuitem id="firstPage" label="First Page"
                    data-l10n-id="first_page" ></menuitem>
          <menuitem id="lastPage" label="Last Page"
                    data-l10n-id="last_page" ></menuitem>
          <menuitem id="pageRotateCcw" label="Rotate Counter-Clockwise"
                    data-l10n-id="page_rotate_ccw" ></menuitem>
          <menuitem id="pageRotateCw" label="Rotate Clockwise"
                    data-l10n-id="page_rotate_cw" ></menuitem>
        </menu>

        <div id="viewerContainer">
          <div id="viewer" contextmenu="viewerContextMenu"></div>
        </div>

        <div id="errorWrapper" hidden='true'>
          <div id="errorMessageLeft">
            <span id="errorMessage"></span>
            <button id="errorShowMore" onClick="" oncontextmenu="return false;" data-l10n-id="error_more_info">
              More Information
            </button>
            <button id="errorShowLess" onClick="" oncontextmenu="return false;" data-l10n-id="error_less_info" hidden='true'>
              Less Information
            </button>
          </div>
          <div id="errorMessageRight">
            <button id="errorClose" oncontextmenu="return false;" data-l10n-id="error_close">
              Close
            </button>
          </div>
          <div class="clearBoth"></div>
          <textarea id="errorMoreInfo" hidden='true' readonly="readonly"></textarea>
        </div>
      </div> <!-- mainContainer -->

    </div> <!-- outerContainer -->
    <div id="printContainer"></div>
  </body>
</html>
