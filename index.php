<!-- 4) Data: valida_data($data) deve retornar true ou false se a DATA passada no parâmetro for válida ou inválida. Deve fazer os cálculos pra saber se a data é válida 'manualmente', isto é, verificando se o valor de dia, mês e ano são válidos de acordo com o mês e o ano ser bissexto ou não. -->

<?php

function valida_data($data)
{
	$bissexto = false;
	$parts = explode("/", $data);
	$d = $parts[0];
	$m = $parts[1];
	$a = $parts[2];
	if ($a % 4 == 0)
	{
		$bissexto = true;
	}

	$m31 = array(
		"01" => "Janeiro",
		"03" => "Março",
		"05" => "Maio",
		"07" => "Julho",
		"08" => "Agosto",
		"10" => "Outubro",
		"12" => "Dezembro"
	);
	$m30 = array(
		"04" => "Abril",
		"06" => "Junho",
		"09" => "Setembro",
		"11" => "Novembro"
	);
	$m28 = array(
		"02" => "Fevereiro"
	);
	if (isset($m31[$m]) && $m31[$m])
	{
		if ($d >= 01 && $d <= 31)
		{
			echo "Data ok. <br/>";
			echo $data;
			return true;
		}
		else
		{
			echo "O mês de " . $m31[$m] . " tem 31 dias!";
			echo "<br/>Data inválida.";
		}
	}
	else
	if (isset($m30[$m]) && $m30[$m])
	{
		if ($d >= 01 && $d <= 30)
		{
			echo "Data ok. <br/>";
			echo $data;
			return true;
		}
		else
		{
			echo "O mês de " . $m31[$m] . " tem 30 dias!";
			echo "<br/>Data inválida.";
		}
	}
	else
	if (isset($m28[$m]) && $m28[$m])
	{
		if ($bissexto)
		{
			if ($d >= 01 && $d <= 29)
			{
				echo "Data ok. <br/>";
				echo $data;
				return true;
			}
			else
			{
				echo "O mês de " . $m28[$m] . " tem 29 dias!";
				echo "<br/>Data inválida.";
			}
		}
		else
		{
			if ($d >= 01 && $d <= 28)
			{
				echo "Data ok. <br/>";
				echo $data;
				return true;
			}
			else
			{
				echo "O mês de " . $m31[$m] . " tem 28 dias!";
				echo "<br/>Data inválida.";
			}
		}
	}
	else
	{
		echo "Digite uma data válida.";
	}
}

valida_data("29/02/2016");
?>