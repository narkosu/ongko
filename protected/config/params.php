<?php
$kpk = 1;
$kemenhub = 2;
$kemenbumn = 3;

/* KPK $formula[DEPARTEMENT][SKJ][ITEMSKJ] = (INPUT/DEFAULT)*(NILAI_JENIS_KOPETENSI/100)  */ 
//$formula[$kpk][] =

/* KEMENHUB $formula[DEPARTEMENT][SKJ][ITEMSKJ] = (INPUT/DEFAULT)*(NILAI_JENIS_KOPETENSI/100)  */
$formula[$kemenhub][6][101] = '(INPUT/DEFAULT)*(NILAI_JENIS_KOPETENSI/100)';
// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'title'=>'My Yii Blog',
	// this is used in error pages
	'adminEmail'=>'webmaster@example.com',
	// number of posts displayed per page
	'postsPerPage'=>10,
	// maximum number of comments that can be displayed in recent comments portlet
	'recentCommentCount'=>10,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
	
	// the copyright information displayed in the footer section
	'copyrightInfo'=>'Copyright &copy; 2009 by My Company.',
	'forumula'=>$formula,
  'template_laporan'=>  array(
                        $kemenhub=>'templatekemenhub.docx',
                        $kpk=>'templatekpk.docx',
                        $kemenbumn=>'templatebumn.docx'
                        ),
  'template_idp_laporan'=>  array(
                        $kemenhub=>'templatekemenhub.docx',
                        $kpk=>'templatekpk.docx',
                        $kemenbumn=>'templatekpk.docx'
                        ),
  'sub_template'=>  array(
                        $kemenhub => array(
                            'profile_kompetensi' => '//masters/pesertaasesor/_profile_kompetensi_persentase'
                            ),
                        $kemenbumn => array(
                            'profile_kompetensi' => '//masters/pesertaasesor/_profile_kompetensi_persentase_bumn'
                            )
                      )
);
