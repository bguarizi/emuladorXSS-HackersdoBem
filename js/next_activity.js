document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const atividade = urlParams.get('atividade');
  
    var nextPath = null;
    var backPath = null;
  
    if(atividade=="ref1"){
      nextPath = "../tutoriais_iniciante/lab2-refletido1.php";
      backPath = "../tutoriais_iniciante/lab1-refletido6.php";
    } else if(atividade=="ref2"){
      nextPath = "../questionarios/quiz_refletido.php";
      backPath = "../tutoriais_iniciante/lab2-refletido3.php";
    } else if(atividade=="arm1"){
      nextPath = "../tutoriais_iniciante/lab2-armazenado1.php";
      backPath = "../tutoriais_iniciante/lab1-armazenado6.php";
    } else if(atividade=="arm2"){
      nextPath = "../questionarios/quiz_armazenado.php";
      backPath = "../tutoriais_iniciante/lab2-armazenado3.php";
    } else if(atividade=="dom1"){
      nextPath = "../tutoriais_iniciante/lab2-dom1.php";
      backPath = "../tutoriais_iniciante/lab1-dom7.php";
    } else if(atividade=="dom2"){
      nextPath = "../questionarios/quiz_dom.php";
      backPath = "../tutoriais_iniciante/lab2-dom1.php";
    } else if (atividade=="ref_vote"){
      nextPath = "../tutoriais_intermediario/lab2-refletido1.php";
    } else if (atividade=="ref_cookie"){
      nextPath = "../questionarios/quiz_refletido_interm.php";
    } else if (atividade=="arm_vote"){
      nextPath = "../tutoriais_intermediario/lab2-armazenado1.php";
    } else if (atividade=="arm_cookie"){
      nextPath = "../questionarios/quiz_armazenado_interm.php";
    } else if (atividade=="dom_vote"){
      nextPath = "../questionarios/quiz_dom_interm.php";
    } else if (atividade=="sanitizado"){
      nextPath = "../tutoriais_intermediario/lab2-sanitizado.php";
    } else if (atividade=="sanitizado_dom"){
      nextPath = "../intermediario/finish.php";
    } else if (atividade=="avancado_cookie"){
      backPath = "../tutoriais_avancado/lab1-refletido9.php";
      nextPath = "../questionarios/quiz_refletido_avanc.php";
    } else if (atividade=="keylogger"){
      backPath = "../tutoriais_avancado/lab1-armazenado5.php";
      nextPath = "../questionarios/quiz_armazenado_avanc.php";
    } else if (atividade=="avanc_sanitizado"){
      backPath = "../tutoriais_avancado/lab1-sanitizado2.php";
      nextPath = "../conteudo_teorico/finish_avanc.php";
    }
  
    const transitionButton = document.getElementById('transition-next');
      if (nextPath) {
          transitionButton.href = nextPath; // Set the href if a valid path is returned
      }
      else{
          transitionButton.href = "#";
      }

      const backButton = document.getElementById('transition-back-lab');
      if (backPath) {
        backButton.href = backPath; // Set the href if a valid path is returned
      }
      else{
        backButton.href = "#";
      }

  });
  