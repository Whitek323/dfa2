
Sasithon
Sasithon Tongsanga
class number
  {
private static void TriangleOne()  
        {  
            int number, i, j = 1 ;  
            Console.Write("Enter number of rows:");  
            number = int.Parse(Console.ReadLine());  
          
            for (j = 1; j <= number; j++)  
            {  
                for (i = 1; i <= 1 * j - 0; i++)  
                    Console.Write("*");  
                Console.WriteLine();  
            }  
            Console.ReadLine();  
        } 
    static void Main(string[] args)
    {
    TriangleOne();
    }
  
  }
