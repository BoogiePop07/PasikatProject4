let step = document.getElementsByClassName('step');
let prevBtn = document.getElementById('prev-btn');
let nextBtn = document.getElementById('next-btn');
let submitBtn = document.getElementById('submit-btn');
let form = document.getElementsByTagName('form')[0];
let progressBar = document.getElementsByClassName('progress-bar')[0];
let progressValue = 0;

nextBtn.addEventListener('click', function() {
   for (let i = 0; i < step.length; i++) {
      if (step[i].style.display !== 'none') {
         progressValue += 100 / step.length;
         progressBar.style.width = progressValue + '%';
         step[i].style.display = 'none';
         if (i + 1 < step.length) {
            step[i + 1].style.display = 'block';
         } else {
            submitBtn.style.display = 'block';
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
         }
         break;
      }
   }
});

prevBtn.addEventListener('click', function() {
   for (let i = 0; i < step.length; i++) {
      if (step[i].style.display !== 'none') {
         progressValue -= 100 / step.length;
         progressBar.style.width = progressValue + '%';
         step[i].style.display = 'none';
         if (i - 1 >= 0) {
            step[i - 1].style.display = 'block';
         } else {
            step[0].style.display = 'block';
            prevBtn.style.display = 'none';
            submitBtn.style.display = 'none';
         }
         break;
      }
   }
});

submitBtn.addEventListener('click', function() {
   form.submit();
});