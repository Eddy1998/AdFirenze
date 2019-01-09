<HTML>
<HEAD>
<TITLE>Codici Tipo Retribuzioni</TITLE>
<!-- nuova tabella, (vecchia versione: DMRE) -->
<SCRIPT language="JavaScript">
var campo = "";
var campoNome = "";
function settaVal()
{
   val1 = opener.document.f.ih1.value;
   opener.document.f.elements[val1].value = campo;
   opener.document.f.A8860.value++;
   nomec = opener.document.f.CampCk.value;
   opener.document.f.elements[nomec].checked = false;
   close();
}
</SCRIPT>
</HEAD>

<BODY BGCOLOR="#E9A688" onUnload="nomec = opener.document.f.CampCk.value;  opener.document.f.elements[nomec].checked = false;">

<FORM name=f>
<CENTER><B>CODICI TIPO RETRIBUZIONE</B></CENTER>
<BR>
<CENTER><TABLE BORDER=1 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#BAD0DB" >

<TR>
<TD ALIGN=CENTER><INPUT type=button name="a" value=" 1 " onClick="campo='1';  settaVal();"></TD>
<TD>Per dichiarare i dati relativi alla parte di retribuzione che supera il massimale annuo di cui all'art. 2, comma 18 della Legge n. 335/1995 (circ. INPS n. 55/1999)</TD>
</TR> 
<TR>
<TD ALIGN=CENTER><INPUT type=button name="a" value=" 6 " onClick="campo='6';  settaVal();"></TD>
<TD>Per dichiarare di dti relativi alla parte di retribuzione che supera il massimale di cui all'art. 3 ter della Legge n. 448/1992, soggetta all'aliquota aggiuntiva dell'uno per cento</TD>
</TR> 
</TABLE></CENTER>
</FORM>
</BODY>
</HTML>
