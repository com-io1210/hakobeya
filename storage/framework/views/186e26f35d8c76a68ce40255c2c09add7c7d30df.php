<html>
<meta charset="utf-8"/>
<body>
<script src="/build/three.min.js"></script>
<script src="/build/three.js"></script>
<script src="/js/controls/TrackballControls.js"></script>
<script>
 
init();
animate();
  
function init() {
    //シーン
    scene = new THREE.Scene();
  
    //カメラ
    camera = new THREE.PerspectiveCamera( 75, 640/480, 1, 10000 );
    camera.position.z = 1000;
     
    trackball = new THREE.TrackballControls( camera );
    trackball.rotateSpeed = 5.0; //回転速度
    trackball.zoomSpeed = 0.5;//ズーム速度
    trackball.panSpeed = 2.0;//パン速度
     
    //ライティング
    var directionalLight = new THREE.DirectionalLight( 0xffffff, 2 ); //平行光源（色、強度）
    directionalLight.position.set(0,0,3);
    scene.add( directionalLight );
     
    //Blenderで出力したjsonオブジェクト
    loader = new THREE.JSONLoader();
    loader.load( '/model/suzannne.json', function ( geometry, materials ) { 
        json = new THREE.Mesh( geometry, materials );
        json.position.set( 0,100,0);
        json.scale.set( 100, 100, 100 );
        scene.add( json );
        } );
     
    //グリッド
    grid = new THREE.GridHelper(600, 10, 0x888888, 0x888888);
    grid.position.y = -40;
    scene.add(grid);
     
    //レンダラー
    renderer = new THREE.WebGLRenderer();
    renderer.setSize( 640, 480 );
    renderer.setClearColor(new THREE.Color('white'));//背景色の設定
    document.body.appendChild( renderer.domElement );
}
  
function animate() {
    requestAnimationFrame( animate );
    renderer.render( scene, camera );
    trackball.update();   
}
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\hakobeya\resources\views/admin/Room/threed.blade.php ENDPATH**/ ?>