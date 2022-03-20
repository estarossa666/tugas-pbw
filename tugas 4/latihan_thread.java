public class latihan_thread {
    
    public static void main(String[] args) {
        int jumlah = 10;
        Thread thread = new Thread(){
            public void run(){
                try{
                    for(int w=1; w<=jumlah; w++){
                        System.out.println("Nomor: "+w);
                        sleep(1000); //Waktu Pending
                    }
                }catch(InterruptedException ex){
                    ex.printStackTrace();
                }
            }
        };
        thread.start();
    }
}