<?php
require_once('vendor\autoload.php');
require_once('test\CellsApiTestBase.php');
use \Aspose\Cells\Cloud\Configuration;
use \Aspose\Cells\Cloud\ApiException;
use \Aspose\Cells\Cloud\ObjectSerializer;
use \Aspose\Cells\Cloud\CellsApiTestBase;
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\DeleteMetadataRequest; 
use \Aspose\Cells\Cloud\Request\GetMetadataRequest; 
use \Aspose\Cells\Cloud\Request\PostAssembleRequest; 
use \Aspose\Cells\Cloud\Request\PostClearObjectsRequest; 
use \Aspose\Cells\Cloud\Request\PostCompressRequest; 
use \Aspose\Cells\Cloud\Request\PostExportRequest; 
use \Aspose\Cells\Cloud\Request\PostMergeRequest; 
use \Aspose\Cells\Cloud\Request\PostMetadataRequest; 
use \Aspose\Cells\Cloud\Request\PostProtectRequest; 
use \Aspose\Cells\Cloud\Request\PostRepairRequest; 
use \Aspose\Cells\Cloud\Request\PostReplaceRequest; 
use \Aspose\Cells\Cloud\Request\PostReverseRequest; 
use \Aspose\Cells\Cloud\Request\PostSearchRequest; 
use \Aspose\Cells\Cloud\Request\PostSplitRequest; 
use \Aspose\Cells\Cloud\Request\PostUnlockRequest; 
use \Aspose\Cells\Cloud\Request\PostWatermarkRequest; 
use \Aspose\Cells\Cloud\Request\CopyFileRequest;
use \Aspose\Cells\Cloud\Request\PostEncryptWorkbookRequest;



// Inisialisasi API dengan kunci API dan URL basis API
$cellsApi = new CellsApi("clienId", "clientSecret", "v3.0", "https://api.aspose.cloud");
$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "outputencrypt.xlsx";

$encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest();
$encryption->setPassword("ridho" ); 
$encryption->setEncryptionType("XOR" ); 
$encryption->setKeyLength(128 ); 
CellsApiTestBase::ready(  $cellsApi,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostEncryptWorkbookRequest();
$request->setName( $remoteName);
$request->setEncryption( $encryption);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$cellsApi->postEncryptWorkbook($request);

