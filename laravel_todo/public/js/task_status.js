function valueChange(event) {
     const task_all = document.getElementsByClassName('all');
     for (var i = 0; i < task_all.length; i++) {
          task_all[i].style.display = 'table-row';
     }
     if (event.currentTarget.value === 'work') {
          const task_done = document.getElementsByClassName('done');
          for (var i = 0; i < task_done.length; i++) {
               task_done[i].style.display = 'none';
          }
     } else if (event.currentTarget.value === 'done') {
          const task_work = document.getElementsByClassName('work');
          for (var i = 0; i < task_work.length; i++) {
               task_work[i].style.display = 'none';
          }
     }
}
const all = document.getElementById('all');
all.checked = true;
all.addEventListener('change', valueChange);

const work = document.getElementById('work');
work.addEventListener('change', valueChange);

const done = document.getElementById('done');
done.addEventListener('change', valueChange);