var lineBar = new ProgressBar.Line('#line-container', {
    color: 'orange',
    strokeWidth: 2,
    trailWidth: 0.5
});

lineBar.animate(1, {
    duration: 1000
});