# Importamos las bibliotecas necesarias
import psycopg2

# Función para obtener los datos de la base de datos
def get_data_from_db():
    """
    Esta función se conecta a la base de datos PostgreSQL y recupera los datos de los estudiantes, tutores y sus preferencias.
    """
    # Establecemos la conexión con la base de datos
    conn = psycopg2.connect(
        dbname="your_database",
        user="your_username",
        password="your_password",
        host="your_host",
        port="your_port"
    )

    # Creamos un cursor para interactuar con la base de datos
    cursor = conn.cursor()

    # Recuperamos los datos de los estudiantes
    cursor.execute("SELECT * FROM students")
    students = cursor.fetchall()

    # Recuperamos los datos de los tutores
    cursor.execute("SELECT * FROM tutors")
    tutors = cursor.fetchall()

    # Recuperamos los datos de las preferencias
    cursor.execute("SELECT * FROM preferences")
    preferences = cursor.fetchall()

    # Cerramos la conexión con la base de datos
    conn.close()

    return students, tutors, preferences

# Función para procesar los datos
def process_data(students, tutors, preferences):
    """
    Esta función procesa los datos recuperados de la base de datos para crear las listas de preferencias de los estudiantes y tutores.
    """
    # Creamos las listas de estudiantes y tutores
    student_list = [student[0] for student in students]
    tutor_list = [tutor[0] for tutor in tutors]

    # Creamos los diccionarios de preferencias de los estudiantes y tutores
    student_pref = {student[0]: [] for student in students}
    tutor_pref = {tutor[0]: [] for tutor in tutors}

    # Llenamos los diccionarios de preferencias con los datos de las preferencias
    for preference in preferences:
        student, tutor, score = preference
        student_pref[student].append((tutor, score))
        tutor_pref[tutor].append((student, score))

    # Ordenamos las listas de preferencias por puntuación
    for student in student_pref:
        student_pref[student].sort(key=lambda x: x[1], reverse=True)
        student_pref[student] = [tutor for tutor, score in student_pref[student]]

    for tutor in tutor_pref:
        tutor_pref[tutor].sort(key=lambda x: x[1], reverse=True)
        tutor_pref[tutor] = [student for student, score in tutor_pref[tutor]]

    return student_list, tutor_list, student_pref, tutor_pref

# Función para implementar el algoritmo de Gale-Shapley
def gale_shapley(tutor_list, student_list, tutor_pref, student_pref):
    """
    Esta función implementa el algoritmo de Gale-Shapley para emparejar tutores y estudiantes basándose en sus preferencias.
    Devuelve una lista de los emparejamientos.
    """
    # Inicializamos la lista de tutores libres y el diccionario de emparejamientos
    free_tutors = tutor_list[:]
    engaged  = {}

    # Mientras haya tutores libres
    while free_tutors:
        # Escogemos un tutor de la lista de tutores libres
        tutor  = free_tutors.pop(0)
        # Obtenemos la lista de preferencias del tutor
        tutor_list = tutor_pref[tutor]
        # El tutor propone al primer estudiante de su lista de preferencias
        student = tutor_list.pop(0)
        # Verificamos si el estudiante ya está emparejado
        engaged_tutor = engaged.get(student)
        if not engaged_tutor:
            # Si el estudiante no está emparejado, lo emparejamos con el tutor
            engaged[student] = tutor
        else:
            # Si el estudiante ya está emparejado, verificamos si prefiere al nuevo tutor
            student_list = student_pref[student]
            if student_list.index(engaged_tutor) > student_list.index(tutor):
                # Si el estudiante prefiere al nuevo tutor, rompemos el emparejamiento anterior y creamos el nuevo emparejamiento
                engaged[student] = tutor
                if tutor_pref[engaged_tutor]:
                    # Si el tutor rechazado todavía tiene estudiantes en su lista de preferencias, lo añadimos a la lista de tutores libres
                    free_tutors.append(engaged_tutor)
            else:
                # Si el estudiante prefiere a su tutor actual, el tutor rechazado propone al siguiente estudiante de su lista de preferencias
                if tutor_list:
                    free_tutors.append(tutor)
    # Convertimos el diccionario de emparejamientos en una lista de emparejamientos
    pairings = [(tutor, student) for student, tutor in engaged.items()]
    return pairings

# Recuperamos los datos de la base de datos
students, tutors, preferences = get_data_from_db()

# Procesamos los datos para crear las listas de preferencias
student_list, tutor_list, student_pref, tutor_pref = process_data(students, tutors, preferences)

# Implementamos el algoritmo de Gale-Shapley para encontrar los emparejamientos
pairings = gale_shapley(tutor_list, student_list, tutor_pref, student_pref)

# Imprimimos la lista de emparejamientos
print("\nEmparejamientos:")
for tutor, student in pairings:
    print(f"  {tutor} y {student}")
